<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\EmployeeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('getdata', [EmployeeController::class, 'getData']);

// Route::get('dashboard', [CustomAuthController::class, 'dashboard']);

// Route::get('login', [CustomAuthController::class, 'index'])->name('login');

// Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');

// Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');

// Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');

// Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('{any}', function () {
    return view('layout/app');
})->where('any', '.*');

