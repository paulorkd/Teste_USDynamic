@extends('layout.site')

@section('titulo','Produto')

@section('conteudo')

<div class="container" style="margin-top: 40px;">
  <h3>Editar Produto</h3>
  <form method="post" action="/produto/atualizar/{{$registro->id}}">
    {{ csrf_field() }}

    <input type="hidden" name="_method" value="put">
    @include('produto._form')

    <button class="btn btn-primary" style="margin-top:40px;">Atualizar</button>
  </form> 
</div>

@endsection  