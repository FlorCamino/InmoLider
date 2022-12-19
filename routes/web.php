<?php

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
    return view('welcome');
});

Route::get('/vermas', function () {
    return view('inicio.ver_mas');
});


Route::resource('/login', LoginController::class)
    ->only('index', 'store');

Route::post('logout', [LoginController::class, 'destroy']);

Route::resource('inicio', InicioController::class);

Route::resource('registro', RegistroController::class)
    ->only('index', 'store');

Route::resource('propiedad', PropiedadController::class);

Route::resource('propietario', PropietarioController::class);

Route::resource('ciudad', CiudadController::class);

Route::resource('usuario', UsuarioController::class);

Route::resource('transaccion', TransaccionController::class);

Route::get('propiedad/getIdTipoTransaccion/{idPropiedad}', [PropiedadController::class, 'getIdTipoTransaccion']);

Route::get('/nosotros', [NosotrosController::class, 'index']);

Route::get('/contacto', [ContactoController::class, 'index']);

Route::get('/ubicacion', [UbicacionController::class, 'index']);

// Route::get('login/facebook', [FacebookController::class, 'index']);

// Route::get('login/google', [GoogleController::class, 'index']);
