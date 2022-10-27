<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Velo;
use App\Models\VeloImage;
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
        "velo_id" => \App\Models\Velo::factory()->has(VeloImage::factory(1))->create()->id,
         "user_id" => \App\Models\User::factory()->create()->id,


        ];
    }
}
