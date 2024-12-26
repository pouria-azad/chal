<?php

namespace Database\Factories;

use App\Models\Chal;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ChalUser>
 */
class ChalUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'chal_id' => Chal::inRandomOrder()->first()->id,
            'user_id' => $this->faker->unique()->numberBetween(1,count(User::all())),
        ];
    }
}
