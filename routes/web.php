<?php

use App\Http\Controllers\LivresController;
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
    return view('index');
});

Route::get('/header', function(){
    return view('header');
});

Route::get('/footer', function(){
    return view('footer');
});


Route::get('/livres',[LivresController::class, 'getAll'])->name('livres');

Route::post('/livres',[LivresController::class, 'add']);

Route::get('/livres/{id}', [LivresController::class, 'show'])->whereNumber('id');

Route::get('/auteur/{id}', [LivresController::class, 'getLivres'])->whereNumber('id');

Route::get('/updateLivres/{id}', [LivresController::class, 'showUpdate'])->whereNumber('id')->name('update');

Route::post('/updateLivres/{id}', [LivresController::class, 'edit'])->name('updateLivres');

Route::delete('/livres/{id}', [LivresController::class, 'delete']);

