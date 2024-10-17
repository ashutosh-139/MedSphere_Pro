<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;
use App\Models\User;
use App\Models\Hospital_Staff;
use App\Models\Slot;
use Illuminate\Support\Facades\Auth;

class userDashboardController extends Controller
{
    public function register(Request $request)
    {
        if($request->isMethod('post')){
            
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'mobile_no' => 'required|numeric|min:10',
                'address' => 'required|string',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required'
            ]);
            $if_exist = User::where('email', $request->email)
                ->orWhere('mobile_no', $request->mobile_no)
                ->first();
            if(!$if_exist) {
                $table = new User();
                $table->name = $request->name;
                $table->email = $request->email;
                $table->mobile_no = $request->mobile_no;
                $table->address = $request->address;
                $table->password = bcrypt($request->password);
                $table->save();
                session()->flash('success', 'Your Account has been created Scuccessfuly..');
                return redirect()->route('login');
            } else {
                session()->flash('exists', 'These Credentials are already exists..');
                return redirect()->back();
            }
        } else {
            return view('Pages.userDashboardPages.register');
        }
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
        
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->route('userDashboard');
            }
            session()->flash('error', 'Incorrect Username or Password..');
            return redirect()->back();
        }
        return view('Pages.userDashboardPages.login');
    }

    public function log_out(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function index(Request $request)
    {
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

    public function profile(Request $request) {

        if ($request->isMethod('post')) {

        }

        return view('Pages.userDashboardPages.profile');

    }

    public function hospital_info(Request $request, string $id)
    {
        $hospital = Hospital::find($id);
        if (!$hospital) {
            abort(404);
        }

        $hospital_staff = Hospital::find($id)->staff;
        if ($hospital_staff->isEmpty()) {
            $hospital_staff = 'no_staff';
        }

        return view('Pages.userDashboardPages.Hospital-details', compact('hospital_staff', 'hospital'));
    }
}