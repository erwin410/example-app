<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livres>
 */
class LivresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->word(2),
            'id_auteur' => Auteurs::inRandomOrder()->first()->id,
            'extrait' => $this->faker->sentence(),
        ];
    }
}
