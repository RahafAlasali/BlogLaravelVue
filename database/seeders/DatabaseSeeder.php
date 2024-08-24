<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Post::create([
            'title' => 'title 1',
            'description' => 'Description 1',
        ]);
        Post::create([
            'title' => Str::random(8),
            'description' => Str::random(10),
        ]);
        Post::create([
            'title' => Str::random(8),
            'description' => Str::random(10),
        ]);
        Post::create([
            'title' => Str::random(10),
            'description' => Str::random(15),
        ]);
        Post::create([
            'title' => Str::random(5),
            'description' => Str::random(18),
        ]);
        Post::create([
            'title' => Str::random(8),
            'description' => Str::random(30),
        ]);
        Comment::create([
            'description' => Str::random(18),
            'post_id'=> 5
        ]);
        Comment::create([   
            'description' => Str::random(30),
            'post_id'=> 4
        ]);
    }
}