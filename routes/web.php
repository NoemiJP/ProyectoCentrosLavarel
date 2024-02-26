<?php

use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\CentroController;
use App\Http\Controllers\ExperienciaController;
use App\Http\Controllers\UsuarioController;
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
Route::get("/",[UsuarioController::class,"inicio"]);
Route::get("/usuarios",[UsuarioController::class,"usuarios"]);
Route::post("/usuarios/login",[UsuarioController::class,"login"]);
Route::get("/cambiarContraseña/{id}",[UsuarioController::class,"cambiarContraseña"]);
Route::post("/actualizarContraseña/{id}",[UsuarioController::class,"actualizarContraseña"]);
Route::get("/ibcf/{id}", [CentroController::class, "ibcf"]);
Route::get("/ipcc/{id}", [CentroController::class, "ipcc"]);
Route::get("/ipjb/{id}", [CentroController::class, "ipjb"]);
Route::get("/imsis/{id}", [CentroController::class, "imsis"]);
Route::get("/ibcf", [CentroController::class, "ibcf2"]);
Route::get("/ipcc", [CentroController::class, "ipcc2"]);
Route::get("/ipjb", [CentroController::class, "ipjb2"]);
Route::get("/imsis", [CentroController::class, "imsis2"]);
Route::get("/experienciasAdmin", [ExperienciaController::class, "experienciasAdmin"]);
Route::get("/crearExperiencias/{id}", [ExperienciaController::class, "experienciasUsuario"]);
Route::get("/registro",[UsuarioController::class,"registro"]);
Route::post("/usuarios/registrar", [UsuarioController::class,"store"]);
Route::get("/logout",[UsuarioController::class,"logout"]);
Route::post("/altaExperiencia/{id}",[ExperienciaController::class,"guardar"]);
Route::get("/listadoExperiencias",[ExperienciaController::class,"listado"]);
Route::get("/experienciasUsuario/{id}", [ExperienciaController::class, "listadoRegistro"]);
Route::get("/experienciasAdmin/{id}", [ExperienciaController::class, "experienciasAdmin"]);
Route::get("/experienciasUsuario",[ExperienciaController::class,"listado"]);
Route::get("/validar/{id}",[ExperienciaController::class,"valido"]);

Route::get("/calendario", [CalendarioController::class,"index"]);