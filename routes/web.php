<?php

use App\Http\Controllers\DeviceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts/main');
});

Route::resource('devices', DeviceController::class);
