<?php

namespace Database\Seeders;

use App\Models\Cat;
use App\Models\Chal;
use App\Models\ChalCat;
use App\Models\ChalUser;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\CategoryFactory;
use Database\Factories\ChalCatFactory;
use Database\Factories\ChallFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        User::create([
            'name'    => 't',
            'password'    => 1234,
            'email' => 't@t.t',
        ]);
//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        Cat::factory(10)->create();
        Chal::factory(10)->create();
        ChalUser::factory(10)->create();
    }
}
