<?php

namespace App\Http\Controllers\TIC;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TICController extends Controller
{
    public function gerente(){
        //Esta ruta es de donde esta el archivo de analista.blade.php
        return view('DEPARTAMENTOS.TIC.Personal.Gerente.gerente');


    }

    public function jefe(){
        
        return view('DEPARTAMENTOS.TIC.Personal.Jefe.jefe');


    }

    public function analista(){
        
        return view('DEPARTAMENTOS.TIC.Personal.Analista.analista');


    }

    public function auxiliar(){
        
        return view('DEPARTAMENTOS.TIC.Personal.Auxiliar.auxiliar');


    }
    
    public function aprendiz(){
        
        return view('DEPARTAMENTOS.TIC.Personal.Aprendiz.aprendiz');


    }
    

}
