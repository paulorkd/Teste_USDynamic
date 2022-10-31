@extends('layout.site')

@section('titulo','Produto')

@section('conteudo')

<div class="container" style="margin-top: 40px;">
  <h3>Usuario</h3>

  <div class="row" style="margin-top:40px;">
      <a class="btn btn-primary" href="/usuario/adicionar">Cadastrar</a>
  </div>

  <div class="table-responsive" style="margin-top:40px;">
      <table class="table" id = "id_table">
          <thead>
              <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Email</th>
                  <th scope="col">Senha</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Ação</th>
              </tr>
          </thead>
          <tbody>
            @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->id }}</td>
              <td>{{ $registro->name }}</td>
              <td>{{ $registro->email }}</td>
              <td>{{ $registro->password }}</td>
              <td>{{ $registro->tipo }}</td>
              <td>
                <a class="btn btn-primary" href="/usuario/editar/{{$registro->id}}">Editar</a>
                <a class="btn btn-danger" href="/usuario/deletar/{{$registro->id}}">Excluir</a>
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
  </div>
</div>

 

 

@endsection  