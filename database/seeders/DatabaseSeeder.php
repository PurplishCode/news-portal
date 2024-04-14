<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    User::create([
        'username' => 'darell',
        'email' => 'admin@gmail.com',
        'password' => Hash::make('admin'),
        'level' => 'admin'
    ]);


    User::create([
        'username' => 'darell',
        'email' => 'user@gmail.com',
        'password' => Hash::make('user'),
        'level' => 'users'
    ]);

    User::create([
        'username' => 'darell',
        'email' => 'editor@gmail.com',
        'password' => Hash::make('editor'),
        'level' => 'editor'
    ]);

    Category::create(['name' => 'News']);

    Category::create(['name' => 'Products']);

    Category::create(['name' => 'Sports']);
    }
}
