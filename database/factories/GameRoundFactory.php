<?php

namespace Database\Factories;

use App\RoundWinner;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GameRound>
 */
class GameRoundFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'winner' => RoundWinner::Unset,
            'group' => fake()->numberBetween(1, 25),
        ];
    }
}
