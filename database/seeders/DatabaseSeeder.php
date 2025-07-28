<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Env;

class DatabaseSeeder extends Seeder
{
    /**
    * Seed the application's database.
    */
    public function run(): void
    {
        User::factory()->create([
            'name' => env('ADMIN_NAME'),
            'email' => env('ADMIN_EMAIL'),
            'password' => bcrypt(env('ADMIN_PASSWORD')),
        ]);
        $this->call(VillageSettingSeeder::class);
        $this->call(PositionSeeder::class);
        $this->call(VillageOfficialSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PageSeeder::class);
    }
}
