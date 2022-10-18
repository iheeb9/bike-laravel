<?php

namespace Database\Seeders;

use App\Models\Balade;
use App\Models\Participation;
use App\Models\Post;
use App\Models\Review;
use http\Client\Curl\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BaladeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Balade::factory(5)
        ->has(Participation::factory()->count(5))
        ->create();
      Review::factory(5)
        ->has(Post::factory()->count(5))
        ->create();
    }
}
