<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TIC\TICController;
use App\Http\Controllers\TIC\Administrador\AdministradorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;

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

//RUTAS PAGINA DE ATERRIZAJE
Route::get('/', WelcomeController::class);

//RUTAS AUTH
Auth::routes();
Route::get('/home', [HomeController::class, 'index']);

//Route::get('/login',[LoginController::class, 'login']);
//Route::get('/register',[LoginController::class, 'register']);


//RUTAS ADMINISTRADOR
Route::get('/TIC/administrador', [AdministradorController::class, 'administrador']);


//RUTAS TIC
//Esta ruta es de donde esta la plantilla de las TIC (Layouts)
Route::get('/TIC/gerente', [TICController::class, 'gerente']);
Route::get('/TIC/jefe', [TICController::class, 'jefe']);
Route::get('/TIC/analista', [TICController::class, 'analista']);
Route::get('/TIC/auxiliar', [TICController::class, 'auxiliar']);
Route::get('/TIC/aprendiz', [TICController::class, 'aprendiz']);

