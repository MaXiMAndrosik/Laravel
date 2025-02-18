<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use App\Models\User;

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
// Route::get('/', function () {
//         return view('welcome');
// });
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

Route::get('/test_url', function () {
        // return 'TestUrl';
        // $response = new Response('Test content', 200);
        // $response = new Response(null, 403);
        // $response = new Response(null, 200);
        // return $response;
        // return response('New Test Url', 200)
        // ->header('X-header', 'Hello World')
        // ->header('Content Type', 'application/json');
        // return redirect('/test_builder');
        // return redirect(null, 301)->route('show_form');
        return redirect(null, 301)->away('http://google.com');
});

Route::get('/test_cookie', function () {
        // return response('TestCookie')
        // ->cookie('my_test_cookie', 'test_cookie', 5)
        // ->withHeaders([
        //         'X-header1'=> 'Hello ',
        //         'X-header2'=> 'World ',
        //         'X-header3'=> 'Hello World ',
        // ]);
        return response('TestCookie')
                ->withoutCookie('my_test_cookie');
});

Route::get('/counter', function () {
        $counter = session('counter', 0);
        session(['counter' => $counter + 1]);
        return response('Counter: ' . session('counter'));
});

Route::get('/result_counter', function () {
        // return session('counter');
        if (session()->has('counter')) {
                session()->forget('counter');
        }
        echo '<pre>';
        var_dump(session()->all());
});

Route::get('/list_of_books', function () {
        $listOfBooks = session()->get('listOfBooks', '');
        return response()->json(['status' => 'received', 'listOfBooks' => $listOfBooks ? unserialize($listOfBooks) : 'The list is empty']);
});

Route::post('/list_of_books', function (Request $request) {

        $listOfBooks = session()->get('listOfBooks', '');
        $listOfBooks = $listOfBooks ? unserialize($listOfBooks) : [];
        $listOfBooks[] = ['author' => $request->get('author'), 'title' => $request->get('title')];
        session()->put('listOfBooks', serialize($listOfBooks));
        return response()->json(['status' => 'saved', 'listOfBooks' => $listOfBooks]);
});

Route::delete('/list_of_books/{id}', function ($id) {

        $listOfBooks = session()->get('listOfBooks', '');
        $listOfBooks = $listOfBooks ? unserialize($listOfBooks) : [];
        if (array_key_exists($id, $listOfBooks)) {
                unset($listOfBooks[$id]);
        }
        session()->put('listOfBooks', serialize($listOfBooks));
        return response()->json(['status' => 'deleted', 'listOfBooks' => $listOfBooks]);
});

Route::get('/file_download', function () {

        // return response()->download(base_path() . '/public/uploads/text.txt', 'my_test');
        return response()->download(base_path() . '/public/uploads/pdp-test.pdf', 'my_test.pdf');
});
Route::get('/file_show', function () {
        // return response()->file(base_path() . '/public/uploads/text.txt');
        return response()->file(base_path() . '/public/uploads/pdp-test.pdf');
});
Route::get('/file_stream', function () {
        return response()->streamDownload(function () {
                echo file_get_contents('http://google.com');
        }, 'my_test.html');
        // return response()->streamDownload(base_path() . '/public/uploads/pdp-test.pdf');
});

Route::get('/check_di', [\App\Http\Controllers\TestDiController::class, 'showUrl']);
Route::get('/send_sms', [\App\Http\Controllers\TestDiController::class, 'sendSms']);

Route::get('/', function () {
        \App\Events\NewsCreated::dispatch(\App\Models\News::first());
        return view('welcome');
});

Route::get('/news-update-test', function () {
        // \App\Models\News::withoutEvents(function () {
        //         \App\Models\News::first()->update(['title' => 'TEST']);
        // });
        \App\Models\News::first()->update(['title' => 'test']);
        return view('welcome');
});

Route::get('/sync-news', function () {
        \App\Jobs\SyncNews::dispatch(15);
        return response(['status' => 'success']);
});

Route::get('/locale', function () {
        echo \Illuminate\Support\Facades\App::getLocale();
});

Route::get('/locale/set/{locale}', function ($locale) {
        \Illuminate\Support\Facades\App::setLocale($locale);
        echo \Illuminate\Support\Facades\App::getLocale();
        echo '<hr>';
        echo __('messages.greet');
});

Route::get('/locale/{locale}/thanks', function ($locale, Request $request) {
        \Illuminate\Support\Facades\App::setLocale($locale);
        echo '<hr>';
        echo __('messages.thanks', ['name' => $request->input('name')]);
});

Route::get('/user/create-test/{amount}', function ($amount) {
        return User::factory($amount)->create();
});

Route::get('/user/{user}/change-email', function (User $user, Request $request) {
        $oldEmail = $user->email;
        $user->email = $request->input('email');
        $user->save();
        $user->notify( new App\Notifications\UserEmailChangedNotification($oldEmail));

        return response(['result' => 'email changed']);
});

Route::get('/user/{user}/notification', function (User $user) {
        return $user->notifications;
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('log-request')->group(function () {
    Route::get('/log-ip', function () {
        return response()->json(['status'   => 'success']);
    });
});

Route::get('/users_auth', [\App\Http\Controllers\UsersController::class, 'index']);
Route::get('/users_auth/{user}', [\App\Http\Controllers\UsersController::class, 'show']);