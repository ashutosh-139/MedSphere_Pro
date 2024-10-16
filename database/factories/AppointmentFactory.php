<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\Hospital;
use App\Models\Hospital_Staff;
use App\Models\Payment;
use App\Models\Slot;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->pluck('id')->first(); //Getting an random user from the users table
        $hospital = Hospital::inRandomOrder()->pluck('id')->first(); //Getting an Random Hospital id from the Hospitals Tables
        $staff = Hospital_Staff::where('hospital_id', $hospital)->inRandomOrder()->first(); //Getting the id of an staff which belongs to the hospital of which we got the hospital id. 

        $date = fake()->dateTimeBetween('-1 year', 'now');
        // Generate an Schedule Slot id from the Hospitals schedules 

        $already_used_slots = Appointment::where('appointment_date', $date)
            ->where('hospital_id', $hospital)
            ->where('stafff_id', $staff)
            ->pluck('schedule_slot_id');

        $slot_id = Slot::where('hospital_id', $hospital)
            ->whereNotIn('id', $already_used_slots)
            ->inRandomOrder()
            ->pluck('id')
            ->first();

        // To randomly generate the payment mode Online/Offline
        $payment_mode_guess = rand(1, 10);
        $payment = 'Online';
        if ($payment_mode_guess > 8) {
            $payment = 'Offline';
        }

        $payment_id = fake()->unique()->uuid();

        Payment::factory()->create([
            'user_id' => $user,
            'hospital_id' => $hospital,
            'payment_amount' => 200,
            'transection_id' => $payment_id
        ]);
        
        return [
            'user_id' => $user,
            'hospital_id' =>  $hospital,
            'stafff_id' => $staff,
            'appointment_date' => $date,
            'schedule_slot_id' => $slot_id,
            'payment_mode' => $payment,
            'payment_id' => Payment::where('transection_id', $payment_id)->pluck('transection_id')[0],
        ];
    }
}
