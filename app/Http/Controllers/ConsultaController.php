<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function listarconsultas()
    {
       return view ('cliente.listarconsultas');
    }
    public function acontecendohoje(){

        return view ('cliente.listarconsultahoje');
    }
    public function agendarconsulta()
    {
        return view ('adm.criarconsulta');
    }
    public function listarconsultasadm()
    {
        return view ('adm.listarconsultasadm');
    } 
    public function consultacadastrada()
    {
       return view ('adm.dadosconsulta');
    }
    public function editConsulta()
    {
        return view ('adm.editconsulta');
    }
    public function excluirConsulta()
    {
        return redirect(route('listarconsultasadm'));
    }
}
