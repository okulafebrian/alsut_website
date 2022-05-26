<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tutee>
 */
class TuteeFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'TOEFL' => $this->faker->randomNumber(3, true),
            'level' => $this->faker->randomElement(['A','B','C']),
            'status' => $this->faker->randomElement(['Active','Inactive'])
        ];
    }
}
