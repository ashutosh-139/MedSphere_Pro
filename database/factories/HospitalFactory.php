<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hospital>
 */
class HospitalFactory extends Factory
{
    protected static ?string $password;
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
            'password' => static::$password ??= Hash::make('password'),
            'appointment_fee' => 200,
            'payment_id' => fake()->phoneNumber,
            'start_time' =>  '9:00',
            'close_time' =>  '22:00'
        ];
    }
}
