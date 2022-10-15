<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Balade>
 */
class BaladeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
          'titre' => $this->faker->name(),
          'description' => $this->faker->text(),
          'nombre' => $this->faker->randomNumber(2),
          'jauge' => $this->faker->randomNumber(2),
          'prix' => $this->faker->randomNumber(2),
          'nbre_participant' => $this->faker->randomNumber(2),
          'info_billetterie' => $this->faker->text(),
          'distance' => $this->faker->randomNumber(5),
          'guide_accompagnateur' => $this->faker->name(),
          'depart' => $this->faker->text(10),
          'arrive' => $this->faker->text(10),
          'date' => $this->faker->date(),
          'disponible' => $this->faker->text(10),
          'image' => $this->faker->text(),
          'Services' => $this->faker->text(40)
        ];
    }
}
