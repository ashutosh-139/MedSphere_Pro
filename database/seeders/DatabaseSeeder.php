<?php

namespace Database\Seeders;

use App\Models\Hospital;
use App\Models\Hospital_Staff;
use App\Models\Slot;
use App\Models\User;
use App\Models\Appointment;
use App\Models\Payment;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Kranti Waghmare',
            'email' => 'kranti@gmail.com',
            'mobile_no' => fake()->unique()->phoneNumber(),
            'address' => fake()->address(),
            'password' => bcrypt('123456'),
        ]);

        User::factory()->create([
            'name' => 'Ashutosh Pichare',
            'email' => 'ashutosh@gmail.com',
            'mobile_no' => fake()->unique()->phoneNumber(),
            'address' => fake()->address(),
            'password' => bcrypt('123456'),
        ]);

        User::factory(98)->create();

        Hospital::factory()->create([
            'name' => 'Matoshri Hospital',
            'address' => 'near by bus stand, latur, Maharashtra, India - 413512',
            'description' => 'Matoshri Multispecialty Hospital offers advanced care in cardiology, neurology, orthopedics, and more. Our expert doctors and modern facilities ensure personalized treatment. We provide 24/7 emergency services, critical care, and diagnostics under one roof, delivering compassionate healthcare to all.',
            'contact_no' => '1234567890',
            'contact_mail' => 'matoshri@gmail.com',
            'password' => bcrypt('123456'),
            'appointment_fee' => 500,
            'payment_id' => 'nskfsfmfladnad6135134fs',
            'start_time' => '9:00',
            'close_time' => '22:00',

        ]);

        Hospital::factory()->create([
            'name' => 'GlobalCare Multispecialty Hospital',
            'address' => 'near by post office, latur, Maharashtra, India - 413512',
            'description' => 'GlobalCare Multispecialty Hospital specializes in oncology, pediatrics, gastroenterology, and dermatology. Our experienced medical staff and cutting-edge technology ensure top-notch treatment. We focus on patient-centered care, preventive programs, and rehabilitation to enhance health outcomes.',
            'contact_no' => '1246445890',
            'contact_mail' => 'globalcare@gmail.com',
            'password' => bcrypt('123456'),
            'appointment_fee' => 500,
            'payment_id' => 'eteesmfladnad5467486134fs',
            'start_time' => '9:00',
            'close_time' => '22:00',

        ]);

        Hospital::factory(48)->create();

        for ($h = 1; $h < 51; $h++) {
            $limit = rand(8, 10);
            for ($i = 1; $i <= $limit; $i++) {
                Hospital_Staff::factory()->create([
                    'hospital_id' => $h,
                ]);
            }
        }

        // Array of slots which can formed by the hospitals
        $slots_array = [
            '8:00 AM to 9:00 AM',
            '9:00 AM to 10:00 AM',
            '10:00 AM to 11:00 AM',
            '11:00 AM to 12:00 PM',
            '1:00 PM to 2:00 PM',
            '2:00 PM to 3:00 PM',
            '4:00 PM to 5:00 PM',
            '5:00 PM to 6:00 PM',
            '6:00 PM to 7:00 PM',
            '7:00 PM to 8:00 PM',
            '9:00 PM to 10:00 PM',
        ];

        // Inserting Records of Slots for the all hospitals which are present in the Hospitals table
        $hospitals = Hospital::all();
        foreach ($hospitals as $hospital) {
            $start = rand(0, 2);
            $end = rand(8, 10);
            for ($i = $start; $i <= $end; $i++) {
                // $slid = rand(0, 10);
                Slot::factory()->create([
                    'hospital_id' => $hospital->id,
                    'slot' => $slots_array[$i],
                ]);
            }
        }

        // To insert the Fake data for the Appointments Table 
        $limit = rand(30, 35);
        $temp = 0;
        // $users = User::where('id', '>', $limit)->pluck('id');
        for ($user = 1; $user <= $limit; $user++) {
            $appointment_no = rand(5, 10);
            for ($apno = 0; $apno <= $appointment_no; $apno++) {

                $temp++;

                $hospital_id = Hospital::inRandomOrder()->limit(1)->pluck('id')[0];
                $staff_id = Hospital_Staff::where('hospital_id', $hospital_id)
                    ->inRandomOrder()
                    ->pluck('id')
                    ->first();
                $date = fake()->dateTimeBetween('-1 year', 'now');
                $already_used_slots = Appointment::where('appointment_date', $date)
                    ->where('hospital_id', $hospital_id)
                    ->where('stafff_id', $staff_id)
                    ->pluck('schedule_slot_id');
                $slot_id = Slot::where('hospital_id', $hospital_id)
                    ->whereNotIn('id', $already_used_slots)
                    ->inRandomOrder()
                    ->pluck('id')
                    ->first();

                $payment_mode_guess = rand(1, 10);
                $payment = 'Online';
                if ($payment_mode_guess > 8) {
                    $payment = 'Offline';
                }

                // Creating a unique id for the Transection id
                $payment_id = fake()->unique()->uuid();

                // Inserting Record into payment section also and getting reference from this table to the appointment table
                Payment::factory()->create([
                    'user_id' => $user,
                    'hospital_id' => $hospital_id,
                    'payment_amount' => 200,
                    'transection_id' => $payment_id,
                ]);

                // Inserting the records into appointment table finally
                $payment_no = Payment::where('transection_id', $payment_id)
                    ->first();
                Appointment::factory()->create([
                    'user_id' => $user,
                    'hospital_id' =>  $hospital_id,
                    'stafff_id' => $staff_id,
                    'appointment_date' => $date,
                    'schedule_slot_id' => $slot_id,
                    'payment_mode' => $payment,
                    'payment_id' => $payment_no,
                ]);
            }
        }
    }
}
