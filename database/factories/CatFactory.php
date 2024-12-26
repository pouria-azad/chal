<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category' => $this->faker->word, // یا یک نام مشخص مثلاً 'خلاقیت و هنر'
            'emoji' => $this->faker->randomElement(['😀', '😊', '😍', '🤣', '😎']),
        ];
    }
}
