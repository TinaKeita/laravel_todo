<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\ToDo;
use App\Models\Diary;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        ToDo::factory()->count(10)->create();
        Diary::factory()->count(10)->create();
    }
}
