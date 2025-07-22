<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VillageSettingSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        $village_setting = [
            'logo_header' => 'setting/logo-text.png',
            'logo_footer' => 'setting/logo-text-bw.png',
            'name' => 'Desa Talun',
            'description' => 'Kami berkomitmen untuk membangun Desa Talun yang maju, sejahtera, dan berkelanjutan melalui pelayanan terbaik dan pemberdayaan masyarakat.',
            'address' => 'Desa Talun, Kemalang, Klaten',
            'phone' => '+6288806016598',
            'email' => 'talunkemalang32@gmail.com',
            'facebook_url' => 'https://facebook.com/',
            'twitter_url' => 'https://twitter.com/',
            'instagram_url' => 'https://instagram.com/',
            'maps_url' => 'https://maps.app.goo.gl/E6LCADtx1Ja3ymDh6',
            'copyright' => '© 2025 Desa Talun',
            'created_by' => '1',
        ];
        
        \App\Models\VillageSetting::create($village_setting);
    }
}
