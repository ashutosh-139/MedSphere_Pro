<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\Suggestion;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\PseudoTypes\False_;
use phpDocumentor\Reflection\PseudoTypes\True_;

class Controller
{
    public function index(Request $request)
    {
        return view('Pages.frontalWebpages.index');
    }

    public function about()
    {
        return view('Pages.frontalWebpages.about');
    }

    public function services()
    {
        return view('Pages.frontalWebpages.services');
    }

    public function blog()
    {
        return view('Pages.frontalWebpages.blogs');
    }

    public function contact(Request $request)
    {
        // $request->session()->forget('msg');
        return view('Pages.frontalWebpages.contact');
    }

    public function contact_submission(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|string'
        ]);

        $table = new Suggestion();
        $table->message = $request->message;
        $table->name = $request->name;
        $table->email = $request->email;
        $table->subject = $request->subject;
        $table->save();

        session()->put('msg', 'Message Submitted Successfuly!');
        return redirect()->back();
    }

    public function blogs_info()
    {
        return view('Pages.frontalWebpages.blog_details');
    }

    public function elements()
    {
        return view('Pages.frontalWebpages.elements');
    }

    public function subscription(Request $request)
    {
        $email_address = $request->subscription_Mail;
        // Creating new instance of subscription table
        $email_exists = Subscription::where('subscription_mail', $email_address)->count();
        if (!($email_exists)) {
            $table = new Subscription();
            $table->subscription_mail = $email_address;
            $table->save();
            // Table successfuly saved ! 
            $request->session()->put('subscribed', True);
        } else {
            $request->session()->put('subscribed', False);
        }
        return redirect()->back();
    }
}
