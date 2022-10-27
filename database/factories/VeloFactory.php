<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\App;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\velo>
 */
class veloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

          'nom' => $this->faker->text(10),
          "categorie_id" => \App\Models\Category::factory()->create()->id,
          'description' => $this->faker->text(),
          'quantite' => $this->faker->randomNumber(2),
          'prix_heure' => $this->faker->randomNumber(2),
          'Disponibilite' => $this->faker->text(10),
          'serie' => $this->faker->text(10),


        ];
    }
}
