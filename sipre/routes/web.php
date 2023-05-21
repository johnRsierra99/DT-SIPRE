<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::resource('personas', App\Http\Controllers\PersonaController::class);
Route::resource('rol', App\Http\Controllers\RolController::class);
Route::resource('programa', App\Http\Controllers\ProgramaController::class);
Route::resource('facultad', App\Http\Controllers\FacultadController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
