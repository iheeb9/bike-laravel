<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Velo>
 */
class VeloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $category = \App\Models\Category::pluck('id')->toArray();

        return [
            'nom' => $this->faker->name(),
            'categorie_id' =>$this->faker->randomElement($category ),



        ];
    }
}
