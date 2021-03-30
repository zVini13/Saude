<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerSaude extends Controller
{
    public function logar(){

    return view ('login');
    }
    public function cadastrar(){

    return view('cadastro');
    } 
    public function recuperar(){

        return view('recupera');
    }




}
