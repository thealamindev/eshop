<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
// Frontend Controller
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('/account', [App\Http\Controllers\FrontendController::class, 'account'])->name('account');
// Frontend Controller ☻

// Customer Controller
Route::post('/customerreg', [App\Http\Controllers\CustomerController::class, 'customerreg'])->name('customerreg');
Route::post('/customerlogin', [App\Http\Controllers\CustomerController::class, 'customerlogin'])->name('customerlogin');
// Customer Controller

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Profile Routes
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'profile'])->name('profile');
Route::post('/profile/photo/upload', [App\Http\Controllers\ProfileController::class, 'profile_photo_upload']);
Route::post('/profile/cover/upload', [App\Http\Controllers\ProfileController::class, 'profile_cover_upload']);
Route::post('/password/change', [App\Http\Controllers\ProfileController::class, 'password_change']);
Route::get('/phone/number/verify', [App\Http\Controllers\ProfileController::class, 'phone_number_verify']);
Route::post('/code/confirm', [App\Http\Controllers\ProfileController::class, 'code_confirm']);

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


