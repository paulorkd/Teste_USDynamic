<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;

class ControllerProduto extends Controller
{

    public function index(){
        $registros = Produto::all();
        return view('produto.index',compact('registros'));
    }

    public function adicionar(){
        return view('produto.adicionar');
    }

    public function salvar(Request $req){
        $dados = $req->all();
        Produto::create($dados);
        return redirect('/produto');
    }

    public function editar($id){
        $registro = Produto::find($id);
        return view('produto.editar',compact('registro'));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();
        Produto::find($id)->update($dados);
        return redirect('/produto');
    }

    public function deletar($id){
        Produto::find($id)->delete();
        return redirect('/produto');
    }
}
