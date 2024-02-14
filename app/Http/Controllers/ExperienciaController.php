<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Experiencia;
use Illuminate\Http\Request;

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
    public function experienciasAdmin()
    {
        return response()->view("experienciasAdmin");
    }

    public function experienciasUsuario()
    {
        return response()->view("experienciasUsuario");
    }

    public function guardar(Request $request){
        $exp = new Experiencia();
        $exp->borrador = $request->borrador;
        $exp->texto = $request->texto;
        $exp->titulo = $request->titulo;
        $exp -> usuario_id = 1;
        $exp->save();
        // ARCHIVOS VINCULADOS A LA EXP
        $arch = new Archivo();
        $file = $request->file('adjunto');
        $fileData = file_get_contents($file->getRealPath());
        if ($fileData !== false) {
        $arch->archivo = $fileData;
        $arch -> experiencias_id = $exp -> id;
        $arch -> save();
        }
        return response()->view("experienciasUsuario");
    }
}
