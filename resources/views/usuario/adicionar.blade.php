@extends('layout.site')

@section('titulo','Produto')

@section('conteudo')

<div class="container" style="margin-top: 40px;">
  <h3>Usuario</h3>
  <form method="post" action="/usuario/salvar">
    {{ csrf_field() }}

    @include('usuario._form')

    <button class="btn btn-primary" style="margin-top:40px;">Cadastrar</button>
  </form> 
</div>





@endsection  