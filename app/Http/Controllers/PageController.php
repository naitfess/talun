<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda()
    {
        $data['village_head'] = \App\Models\VillageOfficial::where('position_id', 1)->first();
        return view('admin.pages.homepage', $data);
    }

    public function sejarahDesa()
    {
        // $data['village_head'] = \App\Models\VillageOfficial::where('position_id', 1)->first();
        return view('admin.pages.about-us');
    }

    public function visiMisi()
    {
        $data['village_head'] = [];
        return view('admin.pages.page-detail', $data);
    }

    public function geografisDemografi()
    {
        return view('admin.pages.page-detail');
    }

    public function strukturOrganisasi()
    {
        return view('admin.pages.page-detail');
    }

    public function perangkatDesa()
    {
        return view('admin.pages.page-detail');
    }

    public function lembagaDesa()
    {
        return view('admin.pages.page-detail');
    }

    public function kontak()
    {
        return view('admin.pages.contact');
    }

    public function kesehatan()
    {
        return view('admin.pages.page-detail');
    }
}
