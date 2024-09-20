<!-- Herde o app.blade.php  -->
@extends('layout.app')
<!-- em quando section eu quero carregar -->
@section('content')
<h2>Visualizar Evento</h2>
<p>Data: {{$evento->data}}</p>
<p>Descriçao: {{$evento->descricao}}</p>
<p>Inicio: {{$evento->inicio}}</p>
<p>Final: {{$evento->final}}</p>
<p>Contato: {{$evento->contato}}</p>
<p>Realizado: {{($evento->realizado) ? 'Sim':'Não'}}</p>
<a href="/eventos"
    class="btn btn-primary">Home</a>
<div>
@endsection