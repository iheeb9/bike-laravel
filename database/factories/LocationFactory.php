<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $users = \App\Models\User::pluck('id')->toArray();
        $velos = \App\Models\Velo::pluck('id')->toArray();

        return [
            'velo_id' =>$this->faker->randomElement($velos ),
            'user_id' =>$this->faker->randomElement($users ),
            'date_start'=>$this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            'date_end'=>$this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s')
        ];
    }
}
