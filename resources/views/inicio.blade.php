@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="links">
        <h1>Teste-PHP</h1>
        <div class="divcad">
            <a class="cad" href="/clientes/create">Cadastro de clientes</a>
        </div>
        <div class="divlis">
            <a class="lis" href="/clientes">Listar/Editar clientes</a>
        </div>
        <div class="divnov">
            <a class="nov" href="/propostas/create">Nova proposta</a>
        </div>
        <div class="divprop">
            <a class="prop" href="/propostas">Listar/Editar propostas</a>
        </div>
    </div>
@endsection