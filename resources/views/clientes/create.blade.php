@extends('layout')

@section('title', 'Cadastro de Clientes')

@section('content')

<form class="formulario" method="POST" action="/clientes">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <h1>Cadastre um cliente</h1>
    <p>{{ session('message') }}</p>
    
    <div class="forms">
    <input type="text" name="razao_social" class="form-control" placeholder="Razão Social" value="{{ old('razao_social') }}" required>
        @if ($errors->has('razao_social'))
            <p>{{ $errors->first('razao_social') }}</p>
        @endif

        <br>

        <input type="text" name="nome_fantasia" class="form-control"placeholder="Nome Fantasia" value="{{ old('nome_fantasia') }}" required>
        @if ($errors->has('nome_fantasia'))
            <p>{{ $errors->first('nome_fantasia') }}</p>
        @endif
    </div>  
    <br>
    
    <div class="forms1">
        <input type="number" name="cnpj" class="form-control" placeholder="CNPJ" value="{{ old('cnpj') }}" required>
        @if ($errors->has('cnpj'))
            <p>{{ $errors->first('cnpj') }}</p>
        @endif
        <br>

        <input type="text" name="endereco" class="form-control" placeholder="Endereço" value="{{ old('endereco') }}" required>
        @if ($errors->has('endereco'))
            <p>{{ $errors->first('endereco') }}</p>
        @endif
    </div>  
    <br>

    <div class="forms2">
        <input type="email" class="form-control" name="email" placeholder="E-mail" value="{{ old('email') }}" required>
        @if ($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
        @endif
        <br>

        <input type="tel" name="tel" class="form-control" placeholder="Telefone" value="{{ old('tel') }}" required>
        @if ($errors->has('tel'))
            <p>{{ $errors->first('tel') }}</p>
        @endif
    </div>  
    <br>

    <div class="forms3">
        <input type="text" class="form-control" name="name" placeholder="Nome do Responsável" value="{{ old('name') }}" required>
        @if ($errors->has('name'))
            <p>{{ $errors->first('name') }}</p>
        @endif
    <br>

        <input type="number" class="form-control" name="cpf" placeholder="CPF" value="{{ old('cpf') }}" required>
        @if ($errors->has('cpf'))
            <p>{{ $errors->first('cpf') }}</p>
        @endif
    <br>
    </div>

    <div class="forms4">
    <input type="tel" class="form-control"  name="cel" placeholder="Celular" value="{{ old('cel') }}" required>
    @if ($errors->has('cel'))
        <p>{{ $errors->first('cel') }}</p>
    @endif
    </div>
    <br>

    <button class="botao" type="submit">Cadastrar Cliente</button>
</form>

@endsection