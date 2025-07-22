<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
            'name' => 'required|unique:categories|string|max:255',
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
            // 'created_by' => auth()->id(),
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
            'name' => 'required|unique:categories,name,' . $slug . '|string|max:255',
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
            // 'updated_by' => auth()->id(),
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
        $category->delete();
        
        return redirect()->route('admin.kategori.index')->with([
            'status' => 'success',
            'message' => 'Kategori Berhasil Dihapus!',
            'title' => 'Berhasil',
        ]);
    }
}
