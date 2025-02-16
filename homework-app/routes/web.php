<?php

use App\Http\Controllers\FormProcessor;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/userform', [App\Http\Controllers\FormProcessor::class, 'index']);

Route::post('/store_form', [App\Http\Controllers\FormProcessor::class, 'store'])->name('store');

Route::get('/test_database', [App\Http\Controllers\EmployeeController::class, 'index']);
Route::post('/test_database', [App\Http\Controllers\EmployeeController::class, 'storeEmployee'])->name('store_employee');

Route::get('/', function () {
    $users = [
        ['name' => 'Ivan', 'age' => 40, 'position' => 'Belarus', 'address' => '123 Main Street'],
        ['name' => 'Petr', 'age' => 15, 'position' => 'Russia', 'address' => '234 Nomain Street'],
        ['name' => 'Vasily', 'age' => 36, 'position' => 'Estonia', 'address' => '345 Second Street'],
        ['name' => 'Denis', 'age' => 34, 'position' => 'Latvia', 'address' => '456 Nosecond Street'],
    ];
    return view('home', ['users' => $users]);
});
Route::get('/contacts', function () {
    $contact = [
        ['address' => '123 Main Street', 'post_code' => '123456', 'email' => 'mail.gmail.com', 'phone' => '79998887766'],
        ['address' => '234 NMain Street', 'post_code' => '23456', 'email' => 'super.gmail.com', 'phone' => '75724532453'],
        ['address' => '345 EMain Street', 'post_code' => '987456', 'email' => 'puper.gmail.com', 'phone' => '78676354524'],
        ['address' => '456 VMain Street', 'post_code' => '582456', 'email' => '', 'phone' => '53745312785'],
    ];
    return view('contacts', ['contacts' => $contact]);
});

Route::get('/get-employee-data', [App\Http\Controllers\EmployeeController::class, 'newIndex']);
Route::post('/store-form', [App\Http\Controllers\EmployeeController::class, 'store'])->name('store_employee-data');
Route::put('/user/{id}', [App\Http\Controllers\EmployeeController::class, 'update'])->name('update_employee-data');

Route::get('/index{id?}', [App\Http\Controllers\BookController::class, 'index'])->name('book-form');
Route::post('/store', [App\Http\Controllers\BookController::class, 'store'])->name('store-book');

Route::get('/users', [App\Http\Controllers\NewUserController::class, 'index'])->name('get-users');
Route::get('/user/{id}', [App\Http\Controllers\NewUserController::class, 'getUser'])->name('get-user');
Route::get('/store-user', [App\Http\Controllers\NewUserController::class, 'createUser']);
Route::post('/store-user', [App\Http\Controllers\NewUserController::class, 'storeUser'])->name('store-user');
Route::get('/resume/{id}', [App\Http\Controllers\PdfGeneratorController::class, 'index']);
