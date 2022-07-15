<?php

use Illuminate\Support\Facades\Route;

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



// How Load A Page With Route
// Don't Uncomment this code block
//Route::get('/{your-route-address}',function (){
//   return view('mintreu.app.guest.{page-location}');
//});


//Test Route

Route::get('/', function () {
    return view('mintreu.app.guest.index');
})->name('frontpage');


Route::get('/login', function () {
    return view('mintreu.app.guest.login');
})->name('login');

Route::get('/otp-login', function () {
    return view('mintreu.app.guest.otp-login');
})->name('otp-login');

Route::get('/register', function () {
    return view('mintreu.app.guest.register');
})->name('register');

Route::get('/forget-password', function () {
    return view('mintreu.app.guest.forget');
})->name('forget');

Route::get('/mobile-login', function () {
    return view('mintreu.app.guest.otp-login');
})->name('otp-login');


Route::get('/dashboard', function () {
    return view('mintreu.app.guest.dashboard');
})->name('dashboard');


Route::get('/cards', function () {
    return view('mintreu.app.guest.cards');
})->name('view-cards');
