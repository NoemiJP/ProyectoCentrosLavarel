<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Experiencia;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExperienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    /*public function experienciasAdmin()
    {
        $experiencias = DB::table('experiencias')
        ->join('usuarios', 'experiencias.usuario_id', '=', 'usuarios.id')
        ->join('archivos', 'experiencias.id', '=', 'archivos.experiencias_id')
        ->where("borrador","=","1")
        ->select("experiencias.id",'experiencias.titulo', 'experiencias.texto','archivos.archivo','usuarios.centro')
        ->get();
        
        return response()->view("experienciasAdmin",["experiencias"=>$experiencias]);
    }*/

    public function experienciasAdmin($id)
    {
        
        $usuario= Usuario::find($id);
        $experiencias = DB::table('experiencias')
        ->join('usuarios', 'experiencias.usuario_id', '=', 'usuarios.id')
        ->where("borrador","=","1")
        ->select("experiencias.id",'experiencias.titulo', 'experiencias.texto','usuarios.centro')
        ->get();
        $archivos = Archivo::all();
        
        return response()->view("experienciasAdmin",["experiencias"=>$experiencias, "archivos" =>$archivos,"usuario" => $usuario]);
    }

    public function experienciasUsuario($id)
    {
        
        $usuario= Usuario::find($id);
    return response()->view("experienciasUsuario", ["usuario" => $usuario]);
    }

    public function experienciasUsuarioNoLogin()
    {
        return response()->view("experienciasUsuario");
    }

    public function valido($id)
    {
        $exp = Experiencia::find($id);
        $exp->borrador = "0";
        $exp->save();
        return redirect()->action([ExperienciaController::class, "experienciasAdmin"]);
    }

    /*public function listado(){
        $experiencias = DB::table('experiencias')
        ->join('usuarios', 'experiencias.usuario_id', '=', 'usuarios.id')
        ->join('archivos', 'experiencias.id', '=', 'archivos.experiencias_id')
        ->where("borrador","=","0")
        ->select("experiencias.id",'experiencias.titulo', 'experiencias.texto','archivos.archivo','usuarios.centro')
        ->get();
        
      
    //return response()->view("experienciasUsuario", ["usuario" => $usuario, "experiencias"=>$experiencias]);
        return response() -> view("listadoExperiencias", ["experiencias"=>$experiencias]);
    }*/

    public function listado(){
        $experiencias = DB::table('experiencias')
        ->join('usuarios', 'experiencias.usuario_id', '=', 'usuarios.id')
        ->where("borrador","=","0")
        ->select("experiencias.id",'experiencias.titulo', 'experiencias.texto','usuarios.centro')
        ->get();
        $archivos = Archivo::all();
        
        return response()->view("listadoExperiencias",["experiencias"=>$experiencias, "archivos" =>$archivos]);
    }

    public function listadoRegistro($id){
        $usuario= Usuario::find($id);
        $experiencias = DB::table('experiencias')
        ->join('usuarios', 'experiencias.usuario_id', '=', 'usuarios.id')
        ->where("borrador","=","0")
        ->select("experiencias.id",'experiencias.titulo', 'experiencias.texto','usuarios.centro')
        ->get();
        $archivos = Archivo::all();
        
        return response()->view("listadoExperiencias",["experiencias"=>$experiencias, "archivos" =>$archivos,"usuario"=>$usuario]);
    }


    public function guardar(Request $request, $id){
        //Crea la experiencia
        $exp = new Experiencia();
        $exp->borrador = $request->borrador;
        $exp->texto = $request->texto;
        $exp->titulo = $request->titulo;
        $exp -> usuario_id = $id;
        $exp->save();
        // Guarda el archivo adjunto
        $arch = new Archivo();
        $file = $request->file('adjunto');
        $fileData = file_get_contents($file->getRealPath());
        if ($fileData !== false) {
        $arch->archivo = $fileData;
        $arch -> experiencias_id = $exp -> id;
        $arch -> save();
        }
        $usuario= Usuario::find($id);
        return response()->json($usuario);
        //return response()->view("experienciasUsuario", ["usuario" => $usuario]);
    }
}
