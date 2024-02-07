<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CentroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function ibcf()
    {
        return response()->view("ibcf");
    }

    public function ipcc()
    {
        return response()->view("ipcc");
    }

    public function ipjb()
    {
        return response()->view("ipjb");
    }
    public function imsis()
    {
        return response()->view("imsis");
    }




}
