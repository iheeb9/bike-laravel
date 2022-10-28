<?php

namespace Database\Seeders;

use App\Models\Participation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

     //  \App\Models\User::factory(1)->make();

        $this->call([
          BaladeSeeder::class,
          ReviewSeeder::class
        ]);

    }
}
