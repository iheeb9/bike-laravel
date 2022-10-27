<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\review>
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
          'image' => "balade.jpg",
          "balade_id" => \App\Models\Balade::factory()->create()->id
        ];
    }
}
