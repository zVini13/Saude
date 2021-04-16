<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CentroSaudeController extends Controller
{
    public function listarcentrosdesaude()
    {
        return view('cliente.listarcentros');
    }
    public function centrodesaude()
    {
        return view ('cliente.mostrarcentro');
    }
    public function cadastrocentro()
    {
        return view ('adm.cadastrocentro');
    }
   //request e save :)
    public function centrocadastrado()
    {
        return view ('adm.dadoscentro');
    }
    public function listarcentrosadm()
    {
       return view ('adm.listarcentrosadm');
    }
    public function editCentro()
    {
        return view ('adm.editcentro');
    }
    public function excluirCentro()
    {
        return redirect(route('listarcentrosadm'));
    }
}
