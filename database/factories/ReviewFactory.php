<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
          'nom' => $this->faker->name(),
          'description' => $this->faker->text(200),
          'date' => $this->faker->date(),
          'image' => "les-balades-a-velo-deutsch-1579098705.jpg",
          "balade_id" => \App\Models\Balade::factory()->create()->id,
        ];
    }
}
