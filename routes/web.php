<?php

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
Route::get("/",[UsuarioController::class,"index"]);
Route::get("/usuarios",[UsuarioController::class,"usuarios"]);
Route::post("/usuarios/login",[UsuarioController::class,"login"]);
Route::get("/ibcf", [CentroController::class, "ibcf"]);
Route::get("/ipcc", [CentroController::class, "ipcc"]);
Route::get("/ipjb", [CentroController::class, "ipjb"]);
Route::get("/imsis", [CentroController::class, "imsis"]);
Route::get("/experienciasAdmin", [ExperienciaController::class, "experienciasAdmin"]);
Route::get("/experienciasUsuario", [ExperienciaController::class, "experienciasUsuario"]);
Route::get("/registro",[UsuarioController::class,"registro"]);
Route::post("/usuarios/registrar", [UsuarioController::class,"store"]);
Route::get("/logout",[UsuarioController::class,"logout"]);

