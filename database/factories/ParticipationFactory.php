<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participation>
 */
class ParticipationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

      return [
          'prixtotale' => $this->faker->randomNumber(2),
         "velo_id" => \App\Models\Velo::factory()->create()->id,
         "user_id" => \App\Models\User::factory()->create()->id,


        ];
    }
}
