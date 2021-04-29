<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
            // if(Auth::check() == true){
                // dd(Auth::user());
            return view ('adm.telaservidor');
            // return redirect()->route('login');
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
            
                $user = new User;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = bcrypt($request->password);
                $user->save();
            

            return view ('adm.dadosusuario', compact('user'));
        }
        public function validarlogin(Request $request)
        {
            if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)){
            return redirect()->back()->withInput()->withErrors(['Email incorreto!']);

            }
            $users = [
                'email'=> $request->email,
                'password'=>$request->password,
            ];

            if(Auth::attempt($users)){
                return redirect()->route('telaservidor');
            };
            return redirect()->back()->withInput()->withErrors(['Email ou senha incorretos!']);
        }
        public function logout()
        {
            Auth::logout();
            return redirect()->route('login');
        }
}
