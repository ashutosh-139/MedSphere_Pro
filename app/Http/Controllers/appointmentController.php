<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appointmentController extends Controller
{
    public function book_appointment(string $hospital_id, $staff_id) {
        echo $hospital_id. '   ' .$staff_id;
    }
}
