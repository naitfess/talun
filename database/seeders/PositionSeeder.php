<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = [
            ['name' => 'Kepala Desa'],
            ['name' => 'Sekretaris Desa'],
            ['name' => 'Kepala Urusan Keuangan'],
            ['name' => 'Kepala Urusan Umum'],
            ['name' => 'Kepala Urusan Perencanaan'],
            ['name' => 'Kepala Urusan Pembangunan'],
            ['name' => 'Kepala Urusan Kesejahteraan Rakyat'],
            ['name' => 'Kepala Urusan Pemerintahan'],
        ];

        foreach ($positions as $position) {
            \App\Models\Position::create($position);
        }
    }
}
