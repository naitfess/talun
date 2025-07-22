<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
    * Seed the application's database.
    */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin Desa',
            'email' => 'admin@talun.com',
            'password' => bcrypt('password'),
        ]);
        $this->call(VillageSettingSeeder::class);
        $this->call(PositionSeeder::class);
        $this->call(VillageOfficialSeeder::class);
        $this->call(CategorySeeder::class);
    }
}
