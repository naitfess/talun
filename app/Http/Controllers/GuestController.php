<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Slider;
use App\Models\Article;
use App\Models\Category;
use App\Models\SubVillage;
use Illuminate\Http\Request;
use App\Models\VillageSetting;
use App\Models\VillageOfficial;
use App\Models\VillageInstitution;

class GuestController extends Controller
{
    public function beranda()
    {
        $data['sliders'] = Slider::get();
        $data['village_head'] = VillageOfficial::where('position_id', 1)->first();
        $data['page'] = Page::where('slug', 'beranda')->first();
        $data['content'] = json_decode($data['page']->content, true);
        $data['articles'] = Article::where('is_published', '1')
        ->orderBy('created_at', 'desc')
        ->take(3)
        ->get();
        foreach ($data['articles'] as $article) {
            $article->content = preg_replace('/<(?!\/?p\b)[^>]+>/i', '', $article->content);
            $article->content = preg_replace('/<p>\s*(&nbsp;)?\s*<\/p>/i', '', $article->content);
        }
        $data['page_hk'] = Page::where('slug', 'hubungi-kami')->first();
        $data['content_hk'] = json_decode($data['page_hk']->content, true);
        return view('homepage', $data);
    }
    
    public function sejarahDesa()
    {
        $data['page'] = Page::where('slug', 'sejarah-desa')->first();
        $data['content'] = json_decode($data['page']->content, true);
        return view('about-us', $data);
    }
    
    public function visiMisi()
    {
        $data['page'] = Page::where('slug', 'visi-misi')->first();
        $data['content'] = json_decode($data['page']->content, true);
        return view('page-details', $data);
    }

    public function monografiDesa()
    {
        $data['page'] = Page::where('slug', 'monografi-desa')->first();
        $data['content'] = json_decode($data['page']->content, true);
        // dd($data['content']);
        return view('monograph', $data);
    }
    
    public function strukturOrganisasi()
    {
        $data['page'] = Page::where('slug', 'struktur-organisasi')->first();
        $data['content'] = json_decode($data['page']->content, true);
        return view('page-details', $data);
    }
    
    public function perangkatDesa()
    {
        $data['villageOfficials'] = VillageOfficial::query()
        ->with('position')
        ->where('position_id', '<=', 1)
        ->orderBy('position_id', 'asc')
        ->get();
        $data['page'] = Page::where('slug', 'perangkat-desa')->first();
        $data['content'] = json_decode($data['page']->content, true);
        return view('page-details', $data);
    }

    public function badanPermusyawaratanDesa()
    {
        $data['page'] = Page::where('slug', 'badan-permusyawaratan-desa')->first();
        $data['content'] = json_decode($data['page']->content, true);
        return view('page-details', $data);
    }
    
    public function lembagaDesa()
    {
        $data['villageInstitutions'] = VillageInstitution::get();
        $data['page'] = Page::where('slug', 'lembaga-desa')->first();
        $data['content'] = json_decode($data['page']->content, true);
        return view('village-institutions', $data);
    }

    public function lembagaDesaDetail($slug)
    {
        $data['AllVillageInstitutions'] = VillageInstitution::get();
        $data['villageInstitution'] = VillageInstitution::query()
            ->where('slug', $slug)
            ->firstOrFail();
        $data['page'] = (object) ['title' => $data['villageInstitution']->name];
        return view('village-institution-details', $data);
    }
    
    public function kesehatan()
    {
        $data['page'] = Page::where('slug', 'kesehatan')->first();
        $data['content'] = json_decode($data['page']->content, true);
        return view('page-details', $data);
    }
    
    public function dukuh()
    {
        $data['page'] = (object) ['title' => 'Dukuh'];
        $data['subVillages'] = SubVillage::get();
        return view('sub-villages', $data);
    }
    
    public function dukuhDetail($slug)
    {
        $data['subVillage'] = SubVillage::where('slug', $slug)->firstOrFail();
        $data['page'] = (object) ['title' => $data['subVillage']->name];
        return view('sub-village-details', $data);
    }
    
    public function artikel()
    {
        $data['page'] = (object) ['title' => 'Artikel'];
        $data['articles'] = Article::query()
        ->with('category')    
        ->where('is_published', '1')
        ->orderBy('created_at', 'desc')
        ->paginate(6);
        foreach ($data['articles'] as $article) {
            $article->content = preg_replace('/<(?!\/?p\b)[^>]+>/i', '', $article->content);
            $article->content = preg_replace('/<p>\s*(&nbsp;)?\s*<\/p>/i', '', $article->content);
        }
        return view('articles', $data);
    }
    
    public function artikelDetail($slug)
    {
        $data['page'] = (object) ['title' => 'Artikel'];
        $data['article'] = Article::query()
        ->with(['category', 'createdBy'])
        ->where('slug', $slug)
        ->where('is_published', '1')
        ->firstOrFail();
        $data['categories'] = Category::withCount(['articles' => function($q) {
            $q->where('is_published', 1);
        }])->get();
        $data['latestArticles'] = Article::query()
        ->with('category')
        ->where('is_published', '1')
        ->orderBy('created_at', 'desc')
        ->take(3)
        ->select('id', 'title', 'slug', 'image', 'created_at')
        ->get();
        return view('article-details', $data);
    }
    
    public function artikelKategori($slug)
    {
        $data['page'] = (object) ['title' => 'Artikel'];
        $data['category'] = Category::where('slug', $slug)->firstOrFail();
        $data['articles'] = Article::query()
        ->with('category')
        ->where('category_id', $data['category']->id)
        ->where('is_published', '1')
        ->orderBy('created_at', 'desc')
        ->paginate(6);
        return view('articles', $data);
    }
    
    public function hubungiKami()
    {
        $data['contact'] = VillageSetting::query()
        ->select('phone', 'email', 'address')
        ->first();
        $data['page'] = Page::where('slug', 'hubungi-kami')->first();
        $data['content'] = json_decode($data['page']->content, true);
        return view('contact-us', $data);
    }
    
    
}
