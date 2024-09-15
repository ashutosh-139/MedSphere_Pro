<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;
use App\Models\User;
use App\Models\Hospital_Staff;

class userDashboardController extends Controller
{
    public function register(Request $request)
    {
        return view('Pages.userDashboardPages.register');
    }

    public function login(Request $request)
    {
        // if ($request->isMethod('post')) {
        //     $request->validate([
        //         'Username' -> 'required|email|size:25',
        //         'Userpassword' -> 'required|email|size:25'
        //     ]);
        // }
        // return view('Pages.userDashboardPages.login');
    }

    public function index(Request $request)
    {
        // if (session()->missing('user_id')) {
        //     return redirect('/User-Login');
        // }
        // $query = Hospital::query()->where('');
        $query = Hospital::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query
                ->where('name', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%')
                ->orWhere('address', 'like', '%' . $search . '%');
        }

        $hospitals = $query->paginate(9);

        if ($request->ajax()) {
            $hospitalHtml = view('Pages.userDashboardPages.partials.hospital', compact('hospitals'))->render();
            $paginationHtml = $hospitals
                ->appends(['search' => $request->input('search')])
                // ->links()
                ->render();
            return response()->json(['hospitalHtml' => $hospitalHtml, 'paginationHtml' => $paginationHtml]);
        }

        return view('Pages.userDashboardPages.index', compact('hospitals'));
    }

    public function hospital_info(Request $request, string $id)
    {
        $hospital = Hospital::where('_id', $id)->first();
        if (!$hospital) {
            abort(404);
        }

        $hospital_staff = Hospital::where('_id', $id)->first()->staff;
        if ($hospital_staff->isEmpty()) {
            $hospital_staff = 'no_staff';
        }

        return view('Pages.userDashboardPages.Hospital-details', compact('hospital_staff', 'hospital'));
    }
}
