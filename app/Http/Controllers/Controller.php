<?php

namespace App\Http\Controllers;

class Controller
{
    public function index() {
        return view('Pages.frontalWebpages.index');
    }

    public function about() {
        return view('Pages.frontalWebpages.about');
    }

    public function services() {
        return view('Pages.frontalWebpages.services');
    }

    public function blog() {
        return view('Pages.frontalWebpages.blogs');
    }

    public function contact() {
        return view('Pages.frontalWebpages.contact');
    }

    public function blogs_info() {
        return view('Pages.frontalWebpages.blog_details');
    }

    public function elements() {
        return view('Pages.frontalWebpages.elements');
    }
    
}
