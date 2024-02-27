<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Experiencia;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExperienciaController extends Controller
{

    public function index()
    {
        //
    }

    public function experienciasAdmin($id)
    {
        // Se busca el usuario, las experiencias donde borrador = 1 y todos los archivos, se pasa la información a la vista
        $usuario = Usuario::find($id);
        $experiencias = DB::table('experiencias')
            ->join('usuarios', 'experiencias.usuario_id', '=', 'usuarios.id')
            ->where("borrador", "=", "1")
            ->select("experiencias.id", 'experiencias.titulo', 'experiencias.texto', 'usuarios.centro')
            ->get();
        $archivos = Archivo::all();

        return response()->view("experienciasAdmin", ["experiencias" => $experiencias, "archivos" => $archivos, "usuario" => $usuario]);
    }

    public function experienciasUsuario($id)
    {
        //Busca el usuario y se lo manda a la vista
        $usuario = Usuario::find($id);
        return response()->view("experienciasUsuario", ["usuario" => $usuario]);
    }

    public function experienciasUsuarioNoLogin()
    {
        // Cargar la vista
        return response()->view("experienciasUsuario");
    }

    public function valido($id, $idUsuario)
    {
        // Se busca el usuario y la experiencia, se modifica el estado borrador de la experiencia a 0 y se actualiza en BBDD
        $usuario = Usuario::find($idUsuario);
        $exp = Experiencia::find($id);
        $exp->borrador = "0";
        $exp->save();
        return redirect()->action([ExperienciaController::class, 'experienciasAdmin'], ['id' => $usuario->id]);
    }


    public function listado()
    {
        // Se buscan las experiencias en borrador=0 y se pasan a la vista
        $experiencias = DB::table('experiencias')
            ->join('usuarios', 'experiencias.usuario_id', '=', 'usuarios.id')
            ->where("borrador", "=", "0")
            ->select("experiencias.id", 'experiencias.titulo', 'experiencias.texto', 'usuarios.centro', 'usuarios.usuario')
            ->get();
        $archivos = Archivo::all();

        return response()->view("listadoExperiencias", ["experiencias" => $experiencias, "archivos" => $archivos]);
    }

    public function listadoRegistro($id)
    {
        // Se buscan el usuario logueado, las experiencias y los archivos y se pasan a la vista
        $usuario = Usuario::find($id);
        $experiencias = DB::table('experiencias')
            ->join('usuarios', 'experiencias.usuario_id', '=', 'usuarios.id')
            ->where("borrador", "=", "0")
            ->select("experiencias.id", 'experiencias.titulo', 'experiencias.texto', 'usuarios.centro', 'usuarios.usuario')
            ->get();
        $archivos = Archivo::all();

        return response()->view("listadoExperiencias", ["experiencias" => $experiencias, "archivos" => $archivos, "usuario" => $usuario]);
    }


    public function guardar(Request $request, $id)
    {
        //Crea la experiencia
        $exp = new Experiencia();
        $exp->borrador = $request->borrador;
        $exp->texto = $request->texto;
        $exp->titulo = $request->titulo;
        $exp->usuario_id = $id;
        $exp->save();
        
        $file = $request->file('adjunto');
        // Guarda el archivo adjunto
        if($file != null){
        $arch = new Archivo();
        $file = $request->file('adjunto');
        $fileData = file_get_contents($file->getRealPath());
        if ($fileData !== false) {
            $arch->archivo = $fileData;
            $arch->experiencias_id = $exp->id;
            $arch->save();
        }
    }
        // Recoge el usuario y se pasa el usuario en formato JSON
        $usuario = Usuario::find($id);
        return response()->json($usuario);
    }
}
