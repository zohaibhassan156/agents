<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

Auth::routes(['verify' => false, 'register' => false]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/customer_login/{customer}', [HomeController::class, 'customerLogin'])->name('customer_login');

});

Route::group(['middleware' => 'auth:customers'], function () {
    Route::get('customer/', [HomeController::class, 'customer'])->name('customer');
});

