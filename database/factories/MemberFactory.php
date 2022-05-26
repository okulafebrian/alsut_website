<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'first_name' => $this->faker->firstName(),
            'gender' => $this->faker->randomElement(['Male','Female']),
            'nim' => $this->faker->numerify('##########'),
            'major' => $this->faker->jobTitle(),
            'birth_date' => $this->faker->date(),
            'line_id' => $this->faker->word(),
            'phone_number' => $this->faker->phoneNumber(),
            'toefl_score' => $this->faker->numerify('####'),
            'presidency' => $this->faker->randomDigitNot(0),
            'password' => $this->faker->word()
            
        ];
    }
}
