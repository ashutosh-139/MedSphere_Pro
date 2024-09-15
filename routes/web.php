<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\userDashboardController;
use App\Http\Controllers\appointmentController;

// Route for just only Testing Purpose
Route::get('/test', function () {
    return view('Pages.userDashboardPages.login');
});

// Routes for the Frontal WebPage Only
Route::get('/', [Controller::class, 'index'])->name('index');
Route::get('/about', [Controller::class, 'about'])->name('about');
Route::get('/services', [Controller::class, 'services'])->name('services');
Route::get('/blog', [Controller::class, 'blog'])->name('blog');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/blog-details', [Controller::class, 'blogs_info'])->name('blogs_info');
Route::get('/elements', [Controller::class, 'elements'])->name('elements');

// Routes for the User Dashboard Only
Route::get('/User-Register', [userDashboardController::class, 'register'])->name('register');
Route::post('/User-Register', [userDashboardController::class, 'register']);  //For Submiting Registeration Data
Route::get('/User-Login', [userDashboardController::class, 'login'])->name('login');
Route::post('/User-Login', [userDashboardController::class, 'login'])->name('validate.user');        //For Submiting Login Data
Route::get('/User-Dashboard', [userDashboardController::class, 'index'])->name('userDashboard');
Route::get('/Hospital-Details/{id}', [userDashboardController::class, 'hospital_info'])->name('hospital.details');
Route::get('/Hospitals/{hospital_id}/Book-Appointment/{staff_id}', [appointmentController::class, 'book_appointment'])->name('book.appointment');

// Routes for the Admin Dashboard Only
Route::get('/Admin-Dashboard', function () {
    return view('Pages.adminDashboardPages.index');
});
