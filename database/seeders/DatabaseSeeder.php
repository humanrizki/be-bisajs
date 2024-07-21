<?php

namespace Database\Seeders;

use App\Models\Role;
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
        // User::factory(10)->create();
        Role::create([
            'name'=>'user',
            'slug'=>'user'
        ]);
        Role::create([
            'name'=>'admin',
            'slug'=>'admin'
        ]);
        Role::create([
            'name'=>'teacher',
            'slug'=>'teacher'
        ]);
        User::factory()->count(10)->create();
    }
}