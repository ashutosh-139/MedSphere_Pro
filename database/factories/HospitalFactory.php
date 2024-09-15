<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hospital>
 */
class HospitalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>S
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company . ' Hospital',
            'address' => fake()->address,
            'description' => fake()->paragraph,
            'contact_no' => fake()->phoneNumber,
            'contact_mail' => fake()->unique()->safeEmail,
            'appointment_fee' => 200,
            'payment_id' => fake()->phoneNumber,
            'start_time' =>  '9:00',
            'close_time' =>  '22:00'
        ];
    }
}
