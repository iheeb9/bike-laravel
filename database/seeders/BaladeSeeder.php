<?php

namespace Database\Seeders;

use App\Models\Balade;
use App\Models\Participation;

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
        ->has(Participation::factory()->count(6))
        ->create();
    }
}


