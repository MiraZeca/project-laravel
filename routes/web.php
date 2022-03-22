<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("/phones",PhoneController::class);
