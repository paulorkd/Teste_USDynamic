@extends('layout.site')

@section('titulo','Produto')

@section('conteudo')

<div class="container" style="margin-top: 40px;">
  <h3>Produto</h3>

  <div class="row" style="margin-top:40px;">
      <a class="btn btn-primary" href="/produto/adicionar">Cadastrar</a>
  </div>

  <div class="table-responsive" style="margin-top:40px;">
      <table class="table" id = "id_table">
          <thead>
              <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Descrição</th>
                  <th scope="col">Valor</th>
                  <th scope="col">Ação</th>
              </tr>
          </thead>
          <tbody>
            @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->id }}</td>
              <td>{{ $registro->descricao }}</td>
              <td>{{ $registro->valor }}</td>
              <td>
                <a class="btn btn-primary" href="/produto/editar/{{$registro->id}}">Editar</a>
                <a class="btn btn-danger" href="/produto/deletar/{{$registro->id}}">Excluir</a>
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
  </div>
</div>

 

 

@endsection  