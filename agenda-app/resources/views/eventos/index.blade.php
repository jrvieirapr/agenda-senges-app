<!-- Herde o app.blade.php  -->
@extends('layout.app')
<!-- em quando section eu quero carregar -->
@section('content')
<h1>Agenda</h1>
<!-- href="{{route('eventos.create')}}" -->
 <!-- "/eventos/create"  -->
<a href="/eventos/create" 
class="btn btn-primary">Novo</a>
<div>
    <table class='table mt-3 table-bordered text-center'>
        <thead>
            <th>#</th>
            <th>Data</th>
            <th>Descricao</th>
            <th>Inicio</th>
            <th>Final</th>
            <th>Contato</th>
            <th>Realizado</th>
        </thead>
        <tbody>
            @foreach($eventos as $evento)
            <td>{{ $evento->id}}</td>
            <td>{{ $evento->data}}</td>
            <td>{{ $evento->descricao}}</td>
            <td>{{ $evento->inicio}}</td>
            <td>{{ $evento->final}}</td>
            <td>{{ $evento->contato}}</td>
            <td>{{ $evento->realizado}}</td>
            @endforeach
        </tbody>
    </table>
</div>
@endsection