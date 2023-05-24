<?php

namespace Database\Factories;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;

use function PHPSTORM_META\exitPoint;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    protected $model = Appointment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "docName" => $this->faker->name(),
            "roomNo" => $this->faker->regexify('Rom\.101'),
            'created_at' => $this->faker->dateTimeThisYear()->format('Y/m/d h:i A'),
        ];
    }
}
