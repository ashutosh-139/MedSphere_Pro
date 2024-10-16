<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hospital;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hospital_Staff>
 */
class Hospital_StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'staff_id' => strtoupper(uniqid('HOSP_')),
            'name' => fake()->name,
            'contact_no' => fake()->phoneNumber,
            'contact_mail' => fake()->unique()->safeEmail,
            'specialization' => fake()->text(200),
            'joing_date' => now(),
        ];
    }
}
