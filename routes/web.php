<?php

use App\Http\Controllers\CiudadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PropiedadController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\TransaccionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsuarioController;
use App\Models\User;
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

Route::resource('inicio', HomeController::class);

Route::resource('login', LoginController::class)
    ->only('index', 'store');

Route::post('logout', [LoginController::class, 'destroy']);

Route::resource('propiedad', PropiedadController::class);

Route::resource('propietario', PropietarioController::class);

Route::resource('ciudad', CiudadController::class);

Route::resource('usuario', UsuarioController::class);

Route::resource('transaccion', TransaccionController::class);
