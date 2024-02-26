<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class CentroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function ibcf($id)
    {
        $usuario= Usuario::find($id);
        return response()->view("ibcf",["usuario" => $usuario]);
    }

    public function ipcc($id)
    {
        $usuario= Usuario::find($id);
        return response()->view("ipcc",["usuario" => $usuario]);
    }

    public function ipjb($id)
    {
        $usuario= Usuario::find($id);
        return response()->view("ipjb",["usuario" => $usuario]);
    }
    public function imsis($id)
    {
        $usuario= Usuario::find($id);
        return response()->view("imsis",["usuario" => $usuario]);
    }

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
