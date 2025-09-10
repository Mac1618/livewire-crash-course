<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BirdCount>
 */
class BirdCountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $birds = [
            'Sparrow', 'Parrot', 'Eagle', 'Owl', 'Kingfisher',
            'Penguin', 'Flamingo', 'Woodpecker', 'Dove', 'Peacock',
        ];

        return [
            'count' => fake()->randomNumber(),
            'bird' => $birds[array_rand($birds)]
        ];
    }
}
