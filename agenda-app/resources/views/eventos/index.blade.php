<!-- Herde o app.blade.php  -->
@extends('layout.app')
<!-- em quando section eu quero carregar -->
@section('content')
<h1>Agenda</h1>
<!-- href="{{route('eventos.create')}}" -->
<!-- "/eventos/create"  -->
<!-- <a href="/eventos/create" -->
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
            <th colspan='3'>Ações</th>
        </thead>
        <tbody>
            @foreach($eventos as $evento)
            <!-- evento.id -->
            <tr>
                <td>{{ $evento->id}}</td>
                <td>{{ $evento->data}}</td>
                <td>{{ $evento->descricao}}</td>
                <td>{{ $evento->inicio}}</td>
                <td>{{ $evento->final}}</td>
                <td>{{ $evento->contato}}</td>
                <td>{{ $evento->realizado}}</td>
                <td>
                    <!-- route('eventos.show') -->
                    <a href="/eventos/{{$evento->id}}"
                        class="btn btn-info">
                        <i class="bi bi-eye"></i>
                    </a>
                </td>
                <td>
                    <!-- route('eventos.edit', $evento) -->
                    <a href="/eventos/{{$evento->id}}/edit"
                        class="btn btn-warning">
                        <i class="bi bi-pencil"></i>
                    </a>
                </td>
                <td>
                    <!-- route('eventos.destroy', $evento) -->
                    <form action="/eventos/{{$evento->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="bi bi-trash"> </i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <nav>
    <ul class="pagination justify-content-center">
        {{-- Link para página anterior --}}
        @if ($eventos->onFirstPage())
            <li class="page-item disabled"><span class="page-link">‹</span></li>
        @else
            <li class="page-item">
                <a class="page-link" href="/eventos?page={{ $eventos->currentPage() - 1 }}">‹</a>
            </li>
        @endif

        {{-- Links de páginas --}}
        @for ($i = 1; $i <= $eventos->lastPage(); $i++)
            @if ($i == $eventos->currentPage())
                <li class="page-item active"><span class="page-link">{{ $i }}</span></li>
            @else
                <li class="page-item"><a class="page-link" href="/eventos?page={{ $i }}">{{ $i }}</a></li>
            @endif
        @endfor

        {{-- Link para próxima página --}}
        @if ($eventos->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="/eventos?page={{ $eventos->currentPage() + 1 }}">›</a>
            </li>
        @else
            <li class="page-item disabled"><span class="page-link">›</span></li>
        @endif
    </ul>
</nav>


</div>
@endsection