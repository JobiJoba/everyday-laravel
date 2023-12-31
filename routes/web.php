<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebcamController;
use App\Livewire\SecondLivewire;
use App\Models\User;
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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('users', 'users.index');
Route::get('/second', SecondLivewire::class);

Route::get('/new-page', function () {
    return view('new-page');
});

Route::get('/new-page-no-view', function () {
    return
        '<html lang="en">
        <head>
            <title>New Page</title>
        </head>
        <body>
            <h1>New Page No View</h1>
        </body>';
});

// Route::get('/users', [UserController::class, 'index']);

Route::get('/users/{anInteger}', [UserController::class, 'withInteger']);

Route::get('/edsd', function () {

    $user = User::withEmail('email', 'ol')->firstOrFail();

})->name('ola');

Route::get('webcam', [WebcamController::class, 'index']);
Route::post('webcam', [WebcamController::class, 'store'])->name('webcam.capture');

Route::resource('photos', PhotoController::class);

require __DIR__.'/auth.php';
