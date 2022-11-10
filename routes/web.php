<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PropietarioController;
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

Route::resource('inicio', InicioController::class);

Route::resource('admin', AdminController::class)
    ->middleware('auth')
    ->middleware('can:ver_tecnicos');

Route::resource('login', LoginController::class);

Route::post('logout', [LoginController::class, 'destroy']);

Route::resource('propietario', PropietarioController::class);

Route::resource('ciudad', CiudadController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
