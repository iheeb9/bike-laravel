<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Review::factory(5)
        ->has(Post::factory()->count(5))
        ->create();
    }
}
