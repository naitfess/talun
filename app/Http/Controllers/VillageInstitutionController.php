<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VillageInstitution;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class VillageInstitutionController extends Controller
{
    public function index(Request $request)
    {
        $data['villageInstitutions'] = VillageInstitution::get();
        return view('admin.village-institutions.index', $data);
    }
    
    public function create()
    {
        return view('admin.village-institutions.create');
    }
    
    public function store(Request $request)
    {
        $rules = [
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|string|unique:village_institutions|max:255',
            'content' => 'required|string',
        ];
        
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        if ($request->hasFile('image')) {
            $image = Storage::disk('public_upload')->put('village-institutions', $request->file('image'));
        }
        
        $data = [
            'image' => $image,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'content' => $request->content,
        ];
        
        VillageInstitution::create($data);
        
        return redirect()->route('admin.lembaga-desa.index')->with([
            'message' => 'Lembaga desa berhasil ditambahkan!',
            'status' => 'success',
            'title' => 'Berhasil',
        ]);
    }
    
    public function edit($id)
    {
        $data['villageInstitution'] = VillageInstitution::findOrFail($id);
        return view('admin.village-institutions.edit', $data);
    }
    
    public function update(Request $request, $id)
    {
        $villageInstitution = VillageInstitution::findOrFail($id);
        $rules = [
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|string|unique:village_institutions,name,' . $id . '|max:255',
            'content' => 'required|string',
        ];
        
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        if ($request->hasFile('image')) {
            Storage::disk('public_upload')->delete($villageInstitution->image);
            $image = Storage::disk('public_upload')->put('village-institutions', $request->file('image'));
        }
        
        $data = [
            'image' => $image ?? $villageInstitution->image,
            'name' => $request->name,
            // 'slug' => Str::slug($request->name),
            'content' => $request->content,
        ];
        
        $villageInstitution->update($data);
        
        return redirect()->route('admin.lembaga-desa.index')->with([
            'message' => 'Lembaga desa berhasil diperbarui!',
            'status' => 'success',
            'title' => 'Berhasil',
        ]);
    }
    
    public function destroy($id)
    {
        $villageInstitution = VillageInstitution::findOrFail($id);
        Storage::disk('public_upload')->delete($villageInstitution->image);
        $villageInstitution->delete();
        
        return redirect()->route('admin.lembaga-desa.index')->with([
            'message' => 'Lembaga desa berhasil dihapus!',
            'status' => 'success',
            'title' => 'Berhasil',
        ]);
    }
}
