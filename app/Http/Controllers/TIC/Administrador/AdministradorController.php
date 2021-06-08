<?php

namespace App\Http\Controllers\TIC\Administrador;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function administrador(){
        //Esta ruta es de donde esta el archivo de administrador.blade.php
        return view('DEPARTAMENTOS.TIC.Administrador.administrador');

    }
}
