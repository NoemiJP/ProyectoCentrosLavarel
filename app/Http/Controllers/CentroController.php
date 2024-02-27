<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class CentroController extends Controller
{
 
    public function ibcf($id)
    {
        // Se busca el usuario logueado y se pasa a la vista
        $usuario= Usuario::find($id);
        return response()->view("ibcf",["usuario" => $usuario]);
    }

    public function ipcc($id)
    {
        // Se busca el usuario logueado y se pasa a la vista
        $usuario= Usuario::find($id);
        return response()->view("ipcc",["usuario" => $usuario]);
    }

    public function ipjb($id)
    {
        // Se busca el usuario logueado y se pasa a la vista
        $usuario= Usuario::find($id);
        return response()->view("ipjb",["usuario" => $usuario]);
    }
    public function imsis($id)
    {
        // Se busca el usuario logueado y se pasa a la vista
        $usuario= Usuario::find($id);
        return response()->view("imsis",["usuario" => $usuario]);
    }


    //Carga las vistas sin más información
    public function ibcf2()
    {
        return response()->view("ibcf");
    }

    public function ipcc2()
    {
       
        return response()->view("ipcc");
    }

    public function ipjb2()
    {
        return response()->view("ipjb");
    }
    public function imsis2()
    {
        return response()->view("imsis");
    }




}
