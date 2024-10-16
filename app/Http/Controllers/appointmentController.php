<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Hospital_Staff;
use Illuminate\Http\Request;

class appointmentController extends Controller
{
    public function book_appointment(string $hospital_id, $staff_id) {
        $hospital = Hospital::find($hospital_id);
        if($hospital) {
            $staff = Hospital_Staff::find($staff_id)->where('hospital_id', $hospital_id)->first();
            if($staff) {
                echo $hospital;
                echo '<br><br>';
                echo $staff;
            } else {
                abort(404);
            }
        } else {
            abort(404);
        }
    }
}