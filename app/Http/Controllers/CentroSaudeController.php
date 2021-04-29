<?php

namespace App\Http\Controllers;

use App\Models\CentroSaude;
use App\Models\Endereco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function centrocadastrado(Request $request)
    {

        $endereco = new Endereco();
        $endereco->logradouro = $request->logradouro;
        $endereco->bairro = $request->bairro;
        $endereco->numero = $request->numero;
        $endereco->cidade = $request->cidade;
        $endereco->complemento = $request->complemento;
       
        $endereco->save();
       
        $centro = new CentroSaude();
        $centro->nome = $request->nome;
        $centro->cnpj = $request->cnpj;
        // $centro->rua = $request->rua;
        // $centro->bairro = $request->bairro;
        // $centro->numero = $request->numero;
        $centro->horario_funcionamento = $request->horario_funcionamento;
        $centro->id_endereco = $endereco->id;
        $centro->id_usuario = Auth()->id();

        $centro->save();
    
      

    

    return view ('adm.dadoscentro', compact('centro', 'endereco'));
    }
    public function listarcentrosadm()
    {
        $centrossaude = CentroSaude::orderBy("id", "asc")->get();

        return view ('adm.listarcentrosadm', compact('centrossaude'));
    }
    public function editCentro()
    {
        
        return view ('adm.editcentro');
    }
    public function excluirCentro($id)
    {
        CentroSaude::destroy($id);
        return redirect(route('listarcentrosadm'));
    }
}
