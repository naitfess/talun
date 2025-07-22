<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VillageOfficialSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        $village_official = [
            'image' => 'setting/blank.png',
            'name' => 'Sri Widodo',
            'position_id' => 1,
        ];

        \App\Models\VillageOfficial::create($village_official);
    }
}
