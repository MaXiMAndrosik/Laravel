<?php

use App\Http\Controllers\FormProcessor;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userform', [App\Http\Controllers\FormProcessor::class, 'index']);

Route::post('/store_form', [App\Http\Controllers\FormProcessor::class, 'store'])->name('store');

Route::get('/test_database', [App\Http\Controllers\EmployeeController::class, 'index']);
Route::post('/test_database', [App\Http\Controllers\EmployeeController::class, 'storeEmployee'])->name('store_employee');

Route::get('/get-employee-data', [App\Http\Controllers\EmployeeController::class, 'newIndex']);
Route::post('/store-form', [App\Http\Controllers\EmployeeController::class, 'store'])->name('store_employee-data');
Route::put('/user/{id}', [App\Http\Controllers\EmployeeController::class, 'update'])->name('update_employee-data');