<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class ControllerLogin extends Controller
{
    public function index(){
        return view('home');
    }


    public function entrar(Request $req){
        $dados = $req->all();

        if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['senha']])){
            return redirect('/produto');
        }else{
            return redirect('/login');
        }
    }

    public function sair(){
        Auth::logout();
        return redirect ('/login');
    }
}
