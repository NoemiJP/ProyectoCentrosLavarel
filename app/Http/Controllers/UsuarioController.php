<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        return response()->view("portada");
    }
    public function inicio(){
        return response()->view("inicio");
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
        // Reglas de validación
        $reglas = [
            "nombre" => "required",
            "apellidos" => "required",
            "email" => "required|email|unique:usuarios",
            "usuario" => "required|unique:usuarios",
            "contrasena" => "required",
            "centro"=> "required",
        ];
    
        // Mensajes de error
        $mensajes = [
            "nombre.required" => "El campo nombre es obligatorio",
            "apellidos.required" => "El campo apellidos es obligatorio",
            "email.required" => "El campo correo electrónico es obligatorio",
            "usuario.required" => "El campo usuario es obligatorio",
            "usuario.unique" => "El usuario ya está registrado",
            "contrasena.required" => "El campo contraseña es obligatorio",
            "centro.required" => "Por favor, seleccione un centro",
        ];
    
        // Validar los campos
        $request->validate($reglas, $mensajes);
    
        // Si la validación es exitosa, registro al usuario
        $usuario = new Usuario([
            "nombre" => $request->nombre,
            "apellidos" => $request->apellidos,
            "email" => $request->email,
            "usuario" => $request->usuario,
            "contrasena" => $request->contrasena,
            "centro"=> $request->centro,
            "rol"=> $request->rol,
        ]);
        
        $usuario->save();
    
        // Redirigir.
        return response()->view('registroCorrecto');
    }

    public function cambiarContraseña($id){
        $usuario= Usuario::find($id);
        return response()->view("contraseña",["usuario"=>$usuario]);
    }

    public function actualizarContraseña(Request $request,$id){
        $usuario= Usuario::find($id);
        if($request->contraseña == $request->contraseña2){
            $usuario->contrasena=$request->contraseña;
            $usuario->save($usuario);
        }
        return response()->view("portada",["usuario"=>$usuario,"mensaje"=>"Se ha actualizado su contraseña correctamente"]);
    }
    

    
    public function logout(){
        return response()->view("portada",["mensaje"=>"Esperamos que vuelva pronto"]);
    }
    
}
