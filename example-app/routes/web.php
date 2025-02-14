<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
        return view('welcome');
});

Route::get('/test', \App\Http\Controllers\TestController::class);

Route::get('/users', [\App\Http\Controllers\UserController::class, 'showUsers']);

Route::get('/test', [\App\Http\Controllers\SimpleController::class, 'test']);

Route::get('/user', [\App\Http\Controllers\UserController::class, 'index']);
Route::post('/user', [\App\Http\Controllers\UserController::class, 'store'])->name('store-user');

Route::get('/books', [\App\Http\Controllers\EntityController::class, 'index'])->name('books');
Route::post('/books', [\App\Http\Controllers\EntityController::class, 'store'])->name('save-book');
Route::get('/remove_book/{id}', [\App\Http\Controllers\EntityController::class, 'delete'])
        ->where(['id' => '[0-9]+'])->name('remove-book');

Route::get('/upload', [\App\Http\Controllers\FileUploadController::class, 'index']);
Route::post('/upload', [\App\Http\Controllers\FileUploadController::class, 'upload'])->name('upload-file');

Route::get('/library_user/{id}', [\App\Http\Controllers\LibraryUserController::class, 'showUser'])
        ->where(['id' => '[0-2]+']);

Route::get('/my_user', [\App\Http\Controllers\MyUserController::class, 'showUser']);

Route::get('/redirect_test', \App\Http\Controllers\TestRedirectController::class);

Route::get('/send_file', \App\Http\Controllers\SendFileController::class);

Route::get('/main', function () {
        return view('mainpage');
});

Route::get('/about', function () {
        return view('about');
});

Route::get('/users_list', function () {
        $users = ['Ivan', 'Petr', 'Vasily', 'Nikolay'];
        return view('users_list', ['usersList' => $users]);
});

Route::get('/uppertest', function () {
        return view('testdir');
});

// Урок 5
Route::get('/test_parametrs', [\App\Http\Controllers\RequestTestController::class, 'testRequest']);

Route::get('/test_header', [\App\Http\Controllers\TestHeaderController::class, 'getHeader']);

Route::get('/test_cookie', [\App\Http\Controllers\TestCookieController::class, 'testCookie']);

Route::get('/upload_file', [\App\Http\Controllers\FileUploadController::class, 'showForm'])->name('showForm');
Route::post('/upload_file', [\App\Http\Controllers\FileUploadController::class, 'fileUpload'])->name('fileUpload');

Route::post('/json_parse', [\App\Http\Controllers\JsonParseController::class, 'parseJson']);

// Урок 6
Route::get('/form', [\App\Http\Controllers\TestFormController::class, 'displayForm'])->name('show_form');
Route::post('/form', [\App\Http\Controllers\TestFormController::class, 'postForm'])->name('post_form');

Route::get('/employee{id?}', [\App\Http\Controllers\EmployeeController::class, 'show'])->name('show-employee');
Route::post('/employee', [\App\Http\Controllers\EmployeeController::class, 'store'])->name('store-employee');

Route::get('/security_test', [\App\Http\Controllers\TestSecurityController::class, 'show']);
Route::post('/security_test', [\App\Http\Controllers\TestSecurityController::class, 'post'])->name('show-security');

Route::get('/test_validation', [\App\Http\Controllers\TestValidationController::class, 'show']);
Route::post('/test_validation', [\App\Http\Controllers\TestValidationController::class, 'post'])->name('post-validation');

Route::get('/test_builder', [\App\Http\Controllers\FormBuilderTestController::class, 'show']);
Route::post('/test_builder', [\App\Http\Controllers\FormBuilderTestController::class, 'post'])->name('post-form');
