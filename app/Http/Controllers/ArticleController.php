<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $query = Article::query();
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where('title', 'like', "%$search%");
        }
        
        if ($request->has('category') && !empty($request->category)) {
            $query->where('category_id', $request->category);
        }

        $data['articles'] = $query->paginate(10)->appends(['search' => $request->search, 'category' => $request->category]);
        return view('admin.articles.index', $data);
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|string|max:255|unique:articles,title',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image')) {
            $image = Storage::disk('public_upload')->put('articles', $request->file('image'));
        }

        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'category_id' => $request->category_id,
            'image' => $image,
            // 'created_by' => auth()->id(),
        ];

        Article::create($data);

        return redirect()->route('admin.artikel.index')->with([
            'message' => 'Artikel berhasil ditambahkan!',
            'status' => 'success',
            'title' => 'Berhasil',
        ]);
    }

    public function edit($slug)
    {
        $data['article'] = Article::where('slug', $slug)->firstOrFail();
        return view('admin.articles.edit', $data);
    }

    public function update(Request $request, $slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        $rules = [
            'title' => 'required|string|max:255|unique:articles,title,' . $article->id,
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image')) {
            Storage::disk('public_upload')->delete($article->image);
            $image = Storage::disk('public_upload')->put('articles', $request->file('image'));
        }

        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'image' => $image ?? $article->image,
            // 'edited_by' => auth()->id(),
        ];

        $article->update($data);

        return redirect()->route('admin.artikel.index')->with([
            'message' => 'Artikel berhasil diperbarui!',
            'status' => 'success',
            'title' => 'Berhasil',
        ]);
    }

    public function updateStatus($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $status = $article->is_published;
        $article->is_published = !$status;
        $article->save();

        return redirect()->route('admin.artikel.index')->with([
            'message' => 'Status artikel berhasil diperbarui!',
            'status' => 'success',
            'title' => 'Berhasil',
        ]);
    }

    public function destroy($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        Storage::disk('public_upload')->delete($article->image);
        $article->delete();

        return redirect()->route('admin.artikel.index')->with([
            'message' => 'Artikel berhasil dihapus!',
            'status' => 'success',
            'title' => 'Berhasil',
        ]);
    }
}
