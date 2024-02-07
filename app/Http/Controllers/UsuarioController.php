<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        return response()->view("portada");
    }
    public function usuarios(){
        return response()->view("login");
    }
    public function login(Request $request)
    {
        $usuario = Usuario::where("usuario", "=", $request->usuario)->where("contrasena", "=", $request->contrasena)->first();
        // meter en sesion
        return response()->view("portada",["usuario"=>$usuario]);
    }

    public function registro(){
        return response()->view("registro");
    }

    public function store(Request $request){
        $usuario= new Usuario($request->all());
        $usuario->save();
        return response()->view('registroCorrecto');
    }
    public function logout(){
        return response()->view("portada");
    }
}
