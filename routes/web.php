<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\ThemeController;
use App\Http\Middleware\CheckIfNameIsAhmed;

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
// Route::get('/hs', function () {
//     dd("I'm Hussein Saad");
// });

Route::get('/hs', function () {
    $data = '<h3>Hussein</h3>';
    $data2 = [1, 3, 7, 10, 6, 2];
    return view('hussein', compact('data', 'data2'));
});

// Route::view('/hs', 'hussein');
// Route::redirect('/hs', 'https://www.google.com/');

// Route::get('/printName/{name?}', [TestController::class, 'printName'])->name('printMyName');

// Route::get('/', function () {
//     $data = 'ahmed';
// return view('posts.create.index.ahmed', ['data' => $data]);
// return view('posts.create.index.ahmed', compact('data'));
// });

//  Route::get('/hussein', [TestController::class, 'hussein']);




// ROUTES GROUPS
// Route::controller(TestController::class)->prefix(name)->name('test.')->middleware('check_ahmed')->group(function () {
//     Route::get('/hs', 'hussein')->name('index');
//     Route::get('/printName/{name?}', 'printName')->name('printMyName');
// });

// Route::get('/hello', [UserController::class, 'index']);
// Route::get('/hello', SingleController::class);
// Route::get('/hello2', SingleController::class);

// Route::resource('posts', PostController::class);

// THEME ROUTES
Route::controller(ThemeController::class)->name('theme.')->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact/store', 'store')->name('contact.store');
    Route::get('/displayContacts', 'display')->name('display');
});
