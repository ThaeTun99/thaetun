<?php

namespace Database\Factories;

use App\Models\Drug;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Drug>
 */
class DrugFactory extends Factory
{

    protected $model = Drug::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "drugName" => $this->faker->word(),
            "amount" => $this->faker->numberBetween(1, 1000) . ' ' . $this->faker->randomElement(['mg', 'g']),
            "stock" => $this->faker->numberBetween(0, 100),
            "eachPrice" => $this->faker->numerify("###"),


        ];
    }
}
