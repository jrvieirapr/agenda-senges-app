@extends('layout.app')

@section('content')
    <h2>Criando novo evento</h2>
    <!-- {{route('eventos.store')}}" -->
    <form action="/eventos" method="POST">
        <!-- habilitar o token -->
        @csrf
        <div class="form-group">
            <label for="data">Data do evento:</label>
            <input type="date" name="data" id="data"
            value="{{ old('data')}}"
            class="form-control @error('data') is-invalid @enderror" >
            @if($errors->has('data'))
                <div class="text-danger">
                    {{$errors->first('data')}}
                </div>
            @endif    
        </div>
        <button type="submit" class="btn btn-primary">Criar</button>        
    </form>
@endsection
