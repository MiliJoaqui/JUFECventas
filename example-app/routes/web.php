<?php

use Illuminate\Support\Facades\Route;

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



// routes/web.php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;

// Display login form
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Handle login form submission
Route::post('/login', [AuthController::class, 'login']);

// Handle logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Display registration form
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Handle registration form submission
Route::post('/register', [RegisterController::class, 'register']);