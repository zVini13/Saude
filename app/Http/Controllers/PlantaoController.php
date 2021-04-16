<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantaoController extends Controller
{
    public function plantoes()
    {
        return view ('cliente.plantoes');
    }
    public function agendarplantao()
    {
        return view ('adm.criarplantao');
    }
    public function plantaocadastrado()
    {
        return view('adm.dadosPlantao');
    }
    public function listarplantoesadm()
    {
        return view ('adm.listarplantoes');
    }
    public function editPlantao()
    {
        return view ('adm.editplantao');
    }
    public function excluirPlantao()
    {
        return redirect(route('listarplantoesadm'));
    }
}
