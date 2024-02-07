<?php

namespace App\Http\Controllers;

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

}
