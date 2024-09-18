@extends('layout.app')

@section('content')
    <h2>Criando novo evento</h2>
    <!-- {{route('eventos.store')}}" -->
    <form action="/eventos" method="POST">
        <!-- habilitar o token -->
        @csrf
        <!-- Data -->
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
        <!-- Data -->
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" id="descricao"
            value="{{ old('descricao')}}"
            class="form-control @error('descricao') is-invalid @enderror" >
            @if($errors->has('descricao'))
                <div class="text-danger">
                    {{$errors->first('descricao')}}
                </div>
            @endif    
        </div>
        <!-- Inicio -->
        <div class="form-group">
            <label for="inicio">Inicio:</label>
            <input type="time" name="inicio" id="inicio"
            value="{{ old('inicio')}}"
            class="form-control @error('inicio') is-invalid @enderror" >
            @if($errors->has('inicio'))
                <div class="text-danger">
                    {{$errors->first('inicio')}}
                </div>
            @endif    
        </div>
        <!-- Final -->
        <div class="form-group">
            <label for="final">Final:</label>
            <input type="time" name="final" id="final"
            value="{{ old('final')}}"
            class="form-control @error('final') is-invalid @enderror" >
            @if($errors->has('final'))
                <div class="text-danger">
                    {{$errors->first('final')}}
                </div>
            @endif    
        </div>
        <!-- Contato -->
        <div class="form-group">
            <label for="contato">Contato:</label>
            <input type="text" name="contato" id="contato"
            value="{{ old('contato')}}"
            class="form-control @error('contato') is-invalid @enderror" >
            @if($errors->has('contato'))
                <div class="text-danger">
                    {{$errors->first('contato')}}
                </div>
            @endif    
        </div>
        <!-- Realizado -->
        <div class="form-group">
            <input type="checkbox" name="realizado" id="realizado"
            {{ old('realizado') ? 'checked' : ''}}
            class="form-check-input @error('realizado') is-invalid @enderror" >
            @if($errors->has('realizado'))
            <div class="text-danger">
                {{$errors->first('realizado')}}
            </div>
            @endif    
            <label for="realizado">Realizado:</label>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top:5px;">Criar</button>        
    </form>
@endsection
