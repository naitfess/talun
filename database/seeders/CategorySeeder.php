<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Berita Desa', 'slug' => 'berita-desa'],
            ['name' => 'Pengumuman', 'slug' => 'pengumuman'],
            ['name' => 'Kegiatan', 'slug' => 'kegiatan'],
            ['name' => 'Informasi Umum', 'slug' => 'informasi-umum'],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::updateOrCreate(
                ['slug' => $category['slug']],
                ['name' => $category['name']]
            );
        }
    }
}
