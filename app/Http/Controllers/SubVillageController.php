<?php

namespace App\Http\Controllers;

use App\Models\SubVillage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SubVillageController extends Controller
{
    public function index(Request $request)
    {
        $query = SubVillage::query();
        
        if (request()->has('search') && !empty(request()->search)) {
            $search = request()->search;
            $query->where('name', 'like', "%$search%");
        }
        
        $data['subVillages'] = $query->paginate(10)->appends(['search' => $request->search]);
        return view('admin.sub-villages.index', $data);
    }
    
    public function create()
    {
        return view('admin.sub-villages.create');
    }
    
    public function store(Request $request)
    {
        $rules = [
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|string|unique:sub_villages,name,NULL,id,deleted_at,NULL|max:255',
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
            'created_by' => Auth::id(),
        ];
        
        SubVillage::create($data);
        
        return redirect()->route('admin.dukuh.index')->with([
            'message' => 'Dukuh berhasil ditambahkan!',
            'status' => 'success',
            'title' => 'Berhasil',
        ]);
    }
    
    public function edit($slug)
    {
        $data['subVillage'] = SubVillage::where('slug', $slug)->firstOrFail();
        return view('admin.sub-villages.edit', $data);
    }
    
    public function update(Request $request, $slug)
    {
        $subVillage = SubVillage::where('slug', $slug)->firstOrFail();
        $rules = [
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|string|unique:sub_villages,name,' . $subVillage->id . ',id,deleted_at,NULL|max:255',
            'content' => 'required|string',
        ];
        
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        if ($request->hasFile('image')) {
            Storage::disk('public_upload')->delete($subVillage->image);
            $image = Storage::disk('public_upload')->put('village-institutions', $request->file('image'));
        }
        
        $data = [
            'image' => $image ?? $subVillage->image,
            'name' => $request->name,
            // 'slug' => Str::slug($request->name),
            'content' => $request->content,
            'edited_by' => Auth::id(),
        ];
        
        $subVillage->update($data);
        
        return redirect()->route('admin.dukuh.index')->with([
            'message' => 'Dukuh berhasil diperbarui!',
            'status' => 'success',
            'title' => 'Berhasil',
        ]);
    }
    
    public function destroy($slug)
    {
        $subVillage = SubVillage::where('slug', $slug)->firstOrFail();
        Storage::disk('public_upload')->delete($subVillage->image);
        $subVillage->deleted_by = Auth::id();
        $subVillage->slug = Str::slug($subVillage->name) . '-' . time();
        $subVillage->save();
        $subVillage->delete();
        
        return redirect()->route('admin.dukuh.index')->with([
            'message' => 'Dukuh berhasil dihapus!',
            'status' => 'success',
            'title' => 'Berhasil',
        ]);
    }
}
