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