<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('departments',\App\Http\Controllers\DepartmentController::class);
Route::apiResource('employees', \App\Http\Controllers\EmployeeController::class);
Route::apiResource('childs', \App\Http\Controllers\ChildController::class);
Route::apiResource('centers', \App\Http\Controllers\CenterController::class);
Route::apiResource('skills', \App\Http\Controllers\SkillController::class);
