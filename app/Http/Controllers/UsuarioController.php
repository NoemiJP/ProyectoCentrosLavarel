<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
           // Cargar la vista de la portada
        return response()->view("portada");
    }
    public function inicio(){
         // Cargar la vista
        return response()->view("inicio");
    }
    public function usuarios(){
         // Cargar la vista
        return response()->view("login");
    }
    public function login(Request $request)
    {
         // Buscar al usuario por nombre de usuario y contraseña
        $usuario = Usuario::where("usuario", "=", $request->usuario)->where("contrasena", "=", $request->contrasena)->first();
        // Meter al usuario en la sesión si se encuentra
        return response()->view("inicio",["usuario"=>$usuario]);
    }

    public function registro(){
         // Cargar la vista
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
    
       // Si la validación es exitosa, registrar al usuario
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
    
       // Redirigir al inicio con un mensaje
        return response()->view('inicio',["usuario"=>$usuario,"mensaje"=>"Se ha registrado correctamente en el sistema"]);
    }

    public function cambiarContraseña($id){
        //Busca usuario por id y te manda a la vista cambio de contraseña
        $usuario= Usuario::find($id);
        return response()->view("contraseña",["usuario"=>$usuario]);
    }

    public function actualizarContraseña(Request $request,$id){
      //Busca usuario por id, actualiza su constraseña y te redirige a la vista inicio con un mensaje
        $usuario= Usuario::find($id);
            $usuario->contrasena=$request->contrasena;
            $usuario->save();
        return response()->view("inicio",["usuario"=>$usuario,"mensaje"=>"Se ha actualizado su contraseña correctamente"]);
    }
    

    
    public function logout(){
          //Cerrar sesión, redirige al inicio con un mensaje
        return response()->view("inicio",["mensaje"=>"Esperamos que vuelva pronto"]);
    }
    
}
