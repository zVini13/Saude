<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function listarmedicos()
    {
        return view ('cliente.listarmedicos');
    }
    public function atendendohoje()
    {
        return view ('cliente.listarmedicoshoje');
    }

    public function medico()
    {
        return view ('cliente.mostrarmedico');
    }
    public function listarmedicosadm()
    {
        return view ('adm.listarmedicosadm');
    }
    public function editMedico()
    {
        return view ('adm.editmedico');
    }
    public function excluirMedico()
    {
        return redirect(route('adm.listarmedicosadm'));
    }
    public function cadastrarmedico()
    {
        return view ('adm.criarmedico');
    }
    public function medicocadastrado()
    {
        return view ('adm.dadosmedico');
    }
}
