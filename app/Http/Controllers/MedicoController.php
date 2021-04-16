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
}
