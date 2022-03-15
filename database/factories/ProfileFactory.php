<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'url' => 'https://source.unsplash.com/random/300x300',
        ];
    }
}
