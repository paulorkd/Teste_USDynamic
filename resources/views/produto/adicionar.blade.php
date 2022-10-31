@extends('layout.site')

@section('titulo','Produto')

@section('conteudo')

<div class="container" style="margin-top: 40px;">
  <h3>Produto</h3>
  <form method="post" action="/produto/salvar">
    {{ csrf_field() }}

    @include('produto._form')

    <button class="btn btn-primary" style="margin-top:40px;">Cadastrar</button>
  </form> 
</div>





@endsection  