<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
          'Subject' => $this->faker->name(),
          'Commentaire' => $this->faker->text(200),
          'image' => "les-balades-a-velo-deutsch-1579098705.jpg",
          "review_id" => \App\Models\Review::factory()->create()->id,
          "user_id" => \App\Models\User::factory()->create()->id,

        ];
    }
}
