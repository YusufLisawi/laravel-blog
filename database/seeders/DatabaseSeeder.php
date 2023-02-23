<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // DB::table('users')->delete();
        // DB::table('posts')->delete();
        // DB::table('comments')->delete();

        User::factory(10)->create();
        // Post::factory(2)->create();
        Comment::factory(10)->create();
    }
}
