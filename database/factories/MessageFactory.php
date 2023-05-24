<?php

namespace Database\Factories;

use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    protected $model = Message::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "texts" => $this->faker->sentence(),
            "type" => $this->faker->randomElement(['VIP', 'Normal']),
            "created_at" => $this->faker->time('H:i'),

        ];
    }
}
