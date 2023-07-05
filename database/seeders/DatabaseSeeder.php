<?php

namespace Database\Seeders;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Jone Doe'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

    }
}
