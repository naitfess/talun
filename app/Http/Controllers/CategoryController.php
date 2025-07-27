<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $query = Category::query();
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where('name', 'like', "%$search%");
        }
        
        $data['categories'] = $query->paginate(10)->appends(['search' => $request->search]);
        return view('admin.categories.index', $data);
    }
    
    public function show($slug)
    {
        $data['category'] = Category::where('slug', $slug)->firstOrFail();
        return $data['category'];
    }
    
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|unique:categories,name,NULL,id,deleted_at,NULL|string|max:255',
        ];
        
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('admin.kategori.index')
            ->with([
                'status' => 'danger',
                'message' => $validator->errors()->first(),
                'title' => 'Gagal',
            ]);
        }
        
        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'created_by' => Auth::id(),
        ];
        
        Category::create($data);
        return redirect()->route('admin.kategori.index')->with([
            'status' => 'success',
            'message' => 'Kategori Berhasil Ditambahkan!',
            'title' => 'Berhasil',
        ]);
    }
    
    public function update(Request $request, $slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        
        $rules = [
            'name' => 'required|unique:categories,name,' . $slug . ',id,deleted_at,NULL|string|max:255',
        ];
        
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('admin.kategori.index')
            ->with([
                'status' => 'danger',
                'message' => $validator->errors()->first(),
                'title' => 'Gagal',
            ]);
        }
        
        $data = [
            'name' => $request->name,
            'edited_by' => Auth::id(),
        ];
        
        $category->update($data);
        
        return redirect()->route('admin.kategori.index')->with([
            'status' => 'success',
            'message' => 'Kategori Berhasil Diupdate!',
            'title' => 'Berhasil',
        ]);
    }

    public function destroy($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        if ($category->articles()->count() > 0) {
            return redirect()->route('admin.kategori.index')->with([
                'status' => 'danger',
                'message' => 'Kategori tidak dapat dihapus karena memiliki artikel terkait.',
                'title' => 'Gagal',
            ]);
        }
        $category->deleted_by = Auth::id();
        $category->slug = Str::slug($category->name) . '-' . time();
        $category->save();
        $category->delete();
        
        return redirect()->route('admin.kategori.index')->with([
            'status' => 'success',
            'message' => 'Kategori Berhasil Dihapus!',
            'title' => 'Berhasil',
        ]);
    }
}
