<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VillageOfficial;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class VillageOfficialController extends Controller
{
    public function index(Request $request)
    {
        $query = VillageOfficial::query()->with('position');
        
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%$search%")
                ->orWhereHas('position', function($q2) use ($search) {
                    $q2->where('name', 'like', "%$search%");
                });
            });
        }
        $data['page_title'] = 'Perangkat Desa';
        $data['villageOfficials'] = $query->paginate(10)->appends(['search' => $request->search]);
        return view('admin.village-officials.index', $data);
    }
    
    public function create()
    {
        $data['page_title'] = 'Perangkat Desa';
        return view('admin.village-officials.create', $data);
    }
    
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'position_id' => 'required|exists:positions,id',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ];
        
        $validator = Validator::make($request->all(), $rules);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        if ($request->hasFile('image')) {
            $image = Storage::disk('public_upload')->put('perangkat-desa', $request->file('image'));
        }
        
        $data = [
            'name' => $request->name,
            'position_id' => $request->position_id,
            'image' => $image,
            'created_by' => Auth::id(),
        ];
        
        VillageOfficial::create($data);
        
        return redirect()->route('admin.perangkat-desa.index')->with([
            'message' => 'Perangkat desa berhasil ditambahkan!',
            'status' => 'success',
            'title' => 'Berhasil',
        ]);
    }
    
    public function edit($id)
    {
        $data['page_title'] = 'Perangkat Desa';
        $data['villageOfficial'] = VillageOfficial::findOrFail($id);
        return view('admin.village-officials.edit', $data);
    }
    
    public function update(Request $request, $id)
    {
        $villageOfficial = VillageOfficial::findOrFail($id);
        
        $rules = [
            'name' => 'required|string|max:255',
            'position_id' => 'required|exists:positions,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];
        
        $validator = Validator::make($request->all(), $rules);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        if ($request->hasFile('image')) {
            Storage::disk('public_upload')->delete($villageOfficial->image);
            $image = Storage::disk('public_upload')->put('perangkat-desa', $request->file('image'));
        }
        
        $data = [
            'name' => $request->name,
            'position_id' => $request->position_id,
            'image' => $image ?? $villageOfficial->image,
            'edited_by' => Auth::id(),
        ];
        
        $villageOfficial->update($data);
        
        return redirect()->route('admin.perangkat-desa.index')->with([
            'message' => 'Perangkat desa berhasil diperbarui!',
            'status' => 'success',
            'title' => 'Berhasil',
        ]);
    }
    
    public function destroy($id)
    {
        $villageOfficial = VillageOfficial::findOrFail($id);
        Storage::disk('public_upload')->delete($villageOfficial->image);
        $villageOfficial->deleted_by = Auth::id();
        $villageOfficial->save();
        $villageOfficial->delete();
        
        return redirect()->route('admin.perangkat-desa.index')->with([
            'message' => 'Perangkat desa berhasil dihapus!',
            'status' => 'success',
            'title' => 'Berhasil',
        ]);
    }
}
