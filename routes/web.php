<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use illuminate\http\Request;
// Route::get('/', function () {
//     return view('welcome');
// });


/* Add routes for login, logout, register, and dashboard */

// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [AuthController::class, 'register']);
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//All listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

//Individual listings
Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});
