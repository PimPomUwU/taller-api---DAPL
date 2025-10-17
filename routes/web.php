<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});

Route::Resource('centers', \App\Http\Controllers\CenterController::class);
Route::Resource('employees', \App\Http\Controllers\EmployeeController::class);
