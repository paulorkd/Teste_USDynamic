<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;


class ControllerUsuario extends Controller
{

    public function index(){
        $registros = User::all();
        return view('usuario.index',compact('registros'));
    }

    public function adicionar(){
        return view('usuario.adicionar');
    }

    public function salvar(Request $req){
        $dados = $req->all();
        $a = $dados['password'];
        $b = bcrypt("$a");
        $dados['password'] = $b;
        User::create($dados);
        return redirect('/usuario');
    }

    public function editar($id){
        $registro = User::find($id);
        return view('usuario.editar',compact('registro'));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();
        $a = $dados['password'];
        $b = bcrypt("$a");
        $dados['password'] = $b;
        User::find($id)->update($dados);
        return redirect('/usuario');
    }

    public function deletar($id){
        User::find($id)->delete();
        return redirect('/usuario');
    }

}
