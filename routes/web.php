<?php

use App\Http\Controllers\LivresController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('accueil');
});

Route::get('/header', function() {
    return view('header');
});

Route::get('/footer', function() {
    return view('footer');
});


Route::prefix('register')->controller(AuthController::class)->group(function () {
    Route::get('/', 'registerForm')->name('register');
    Route::post('/', 'register');
});

Route::prefix('login')->controller(AuthController::class)->group(function () {
    Route::get('/', 'loginForm')->name('login');
    Route::post('/', 'login');
});


Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::prefix('livres')->controller(LivresController::class)->group(function () {
    Route::get('/', 'getAll')->name('livres');
    Route::get('/{id}', 'show')->whereNumber('id');
});



Route::middleware(['auth'])->group(function () {

    Route::prefix('livres')->controller(LivresController::class)->group(function () {
        Route::post('/', 'add');
        Route::delete('/{id}', 'delete');
    });

    Route::get('/updateLivres/{id}', [LivresController::class, 'showUpdate'])->whereNumber('id')->name('update');
    Route::post('/updateLivres/{id}', [LivresController::class, 'edit'])->name('updateLivres');
    Route::get('/auteur/{id}', [LivresController::class, 'getLivres'])->whereNumber('id');
});




