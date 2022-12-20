<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\PropiedadController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\TransaccionController;
use App\Http\Controllers\UbicacionController;
use App\Http\Controllers\UsuarioController;
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
    return view('layouts.registro_login');
});

Route::get('/login', [LoginController::class, 'index'])
    ->name('login');

Route::post('/login', [LoginController::class, 'store'])->name('login');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('inicio', InicioController::class)
    ->middleware('Visitante');

Route::resource('registro', RegistroController::class)
    ->only('index', 'store');

Route::resource('admin_registro', AdminController::class)
    ->only('index', 'store');

Route::resource('propiedad', PropiedadController::class)
    ->middleware('Administrador');

Route::resource('propietario', PropietarioController::class)
    ->middleware('Administrador');

Route::resource('ciudad', CiudadController::class)
    ->middleware('Administrador');

Route::resource('usuario', UsuarioController::class)
    ->middleware('Administrador');

Route::resource('transaccion', TransaccionController::class)
    ->middleware('Administrador');

Route::get('propiedad/getIdTipoTransaccion/{idPropiedad}', [PropiedadController::class, 'getIdTipoTransaccion']);

Route::get('/nosotros', [NosotrosController::class, 'index'])
    ->middleware('Visitante');

Route::get('/contacto', [ContactoController::class, 'index'])
    ->middleware('Visitante');

Route::get('/ubicacion', [UbicacionController::class, 'index'])
    ->middleware('Visitante');

// Route::get('login/facebook', [FacebookController::class, 'index']);

// Route::get('login/google', [GoogleController::class, 'index']);
