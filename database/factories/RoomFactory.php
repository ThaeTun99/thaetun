<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "roomNumber" => $this->faker->regexify('Rom\.101'),
            "status" => $this->faker->randomElement(['Active', 'Lock']),
            "total" => $this->faker->randomElement(['1', '2', 'none']),
            "price" => $this->faker->numerify("###")


        ];
    }
}
