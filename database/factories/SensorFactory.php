<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sensor>
 */
class SensorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'temperature' => $this->faker->randomNumber(),
            'humidity' => $this->faker->randomNumber(),
            'led' => $this->faker->boolean,
            'buzzer' => $this->faker->boolean,
            'counter' => $this->faker->randomNumber(),
        ];
    }
}
