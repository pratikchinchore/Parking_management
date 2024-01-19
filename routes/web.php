<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdmintableController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/allotment', function () {
    return view('allotment');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/booking-update', function () {
    return view('booking_update');
});

Route::get('/connect', function () {
    return view('connect');
});

Route::get('new_contact', [ContactController::class, 'index'])->name('new_contact');
Route::post('new_contact', [ContactController::class, 'store']);


Route::get('book_vehicle', [BookingController::class, 'index'])->name('book_vehicle');
Route::post('book_vehicle', [BookingController::class, 'store']);
Route::get('Update_vehicle', [BookingController::class, 'update']);


Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

// Admin Routes starts
Route::get('/admin/tables', function () {
    return view('admin/tables');
});

Route::get('/admin/tables', [AdmintableController::class, 'retrivedata'])->name('users');

Route::get('/admin/vehicle_table', function () {
    return view('admin/vehicle_table');
});

Route::get('/admin/vehicle_table', [AdmintableController::class, 'vehicledata'])->name('users');

Route::get('/admin/billling', function () {
    return view('admin/billling');
});

Route::get('/admin/billling', [AdmintableController::class, 'billlingdata'])->name('users');
Route::get('/booking-update', [AdmintableController::class, 'update_vehicle'])->name('users');

