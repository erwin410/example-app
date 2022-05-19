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
    return view('welcome');
});

Route::get('/header', function(){
    return view('header');
});


Route::get('/livres',[LivresController::class, 'getAll'])->name('livres');

Route::post('/livres',[LivresController::class, 'add']);

Route::get('/livres/{id}', [LivresController::class, 'show'])->whereNumber('id');

