<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Hospital;
use App\Models\Hospital_Staff;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class appointmentController extends Controller
{
    public function book_appointment(string $hospital_id, $staff_id, Request $request) {
        $hospital = Hospital::find($hospital_id);
        if($hospital) {
            $hospital_staff = Hospital_Staff::find($staff_id)->where('hospital_id', $hospital_id)->first();
            if($hospital_staff) {
                $schedules = Hospital::find($hospital_id)->slot;
                // echo $hospital;
                // echo '<br><br> <script>console.log('.Auth::user().');</script>';
                // dd(session()->all());
                return view('Pages.userDashboardPages.Appointment_Book', compact('hospital_staff', 'hospital', 'schedules'));
            } else {
                abort(404);
            }
        } else {
            abort(404);
        }
    }

    public function confirm_booking(Request $request) {
        $user_id = $request->user_id;
        $hospital_id = $request->hospital_id;
        $staff_id = $request->staff_id;
        $payment_mode = $request->payment_mode;
        $appointment_date = $request->appointment_date;
        $slot = $request->slot;

        $payment = new Payment();
        $payment->user_id = $user_id;
        $payment->hospital_id = $hospital_id;
        $payment->payment_amount = 200;
        $payment->transection_id = fake()->unique()->uuid();
        $payment->save();

        $table = new Appointment();
        $table->user_id = $user_id;
        $table->hospital_id = $hospital_id;
        $table->stafff_id = $staff_id;
        $table->appointment_date = $appointment_date;
        $table->schedule_slot_id = $slot;
        $table->payment_mode = $payment_mode;
        $table->payment_id = $payment->id;
        $table->save();

        session()->flash('success', 'Your Appointment has been Booked Successfuly..');
        return redirect()->back();

    }

    public function my_appointments() {
        $user_id = Auth::user()->id;
        $appointments = Appointment::where('user_id', $user_id)->latest()->with(['hospital', 'doctor', 'slot'])->get();
        // print_r($appointments);
        return view('Pages.userDashboardPages.My-Appointment', compact('appointments'));
    }
}