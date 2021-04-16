<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    //
    public function logar(){

        return view ('adm.login');
        }
        public function cadastrar(){
    
        return view('adm.cadastro');
        } 
        public function recuperar(){
    
            return view('adm.recupera');
        }
        public function paginaadm(){

            return view ('adm.createadm');
        }
        public function telaservidor(){

            return view ('adm.telaservidor');
        }
        public function confirma()
        {
            return view('adm.confirmarsenha');
        }
        public function redefinir()
        {
           return view ('adm.redefinirsenha');
        }
        public function dadosusuario(Request $request)
        {
            
                $usuario = new Usuario;
                $usuario->nome = $request->nome;
                $usuario->email = $request->email;
                $usuario->senha = $request->senha;
                $usuario->save();
            

            return view ('adm.dadosusuario', compact('usuario'));
        }
}
