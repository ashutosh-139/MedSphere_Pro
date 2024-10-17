<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\userDashboardController;
use App\Http\Controllers\appointmentController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;

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
Route::post('/contact-form', [Controller::class, 'contact_submission'])->name('contact.submit');
Route::get('/blog-details', [Controller::class, 'blogs_info'])->name('blogs_info');
Route::get('/elements', [Controller::class, 'elements'])->name('elements');
Route::post('/newsletter', [Controller::class, 'subscription'])->name('newsletter');

// Routes for the User Dashboard Only
Route::get('/User-Register', [userDashboardController::class, 'register'])->name('register');
Route::post('/User-Register', [userDashboardController::class, 'register']);  //For Submiting Registeration Data
Route::get('/User-Login', [userDashboardController::class, 'login'])->name('login');
Route::post('/User-Login', [userDashboardController::class, 'login'])->name('validate.user');        //For Submiting Login Data

Route::middleware(['auth'])->group(function () {

    Route::get('/User-Dashboard', [userDashboardController::class, 'index'])->name('userDashboard');

    Route::get('/User-Profile', [userDashboardController::class, 'profile'])->name('user.profile');

    Route::post('/User-Profile', [userDashboardController::class, 'profile'])->name('update.profile');

    Route::get('/User-Appointment', [appointmentController::class, 'my_appointments'])->name('user.appointments');

    Route::get('/Hospital-Details/{id}', [userDashboardController::class, 'hospital_info'])->name('hospital.details');

    Route::get('/Hospitals/{hospital_id}/Book-Appointment/{staff_id}', [appointmentController::class, 'book_appointment'])->name('book.appointment');

    Route::post('/Hospitals/Book-Appointment/cofirm-appointment', [appointmentController::class, 'confirm_booking'])->name('book.appointment.confirm');

    Route::get('/log-out', [userDashboardController::class, 'log_out'])->name('user.logout');        //For Submiting Login Data

});


// Routes for the Admin Dashboard Only
Route::get('/Admin-Dashboard', function () {
    return view('Pages.adminDashboardPages.index');
});
