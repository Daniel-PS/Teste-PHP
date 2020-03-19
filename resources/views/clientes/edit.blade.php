@extends('layout')

@section('title', 'Cadastro de Clientes')

@section('content')

    <h1 style="text-align: center;" class="title">Editar Clientes</h1>
    <h4 style="text-align: center;"  class="cliente">Cliente {{ $cliente->name}}, de ID {{ $cliente->id}}</h4>

    <form class="formEdit" method="POST" action="/clientes/{{ $cliente->id }}">
        @method('PATCH')
        @csrf
        
        <div class="field">
            <label class="label" for="razao_social">Razão Social</label>

            <div class="control">
                <input type="text" class="form-control" name="razao_social" placeholder="Razão Social" value="{{ $cliente->razao_social }}"></input>
            </div>
        </div>

        {{-- Separação --}}

        <div class="field">
            <label class="label" for="nome_fantasia">Nome Fantasia</label>

            <div class="control">
                <input type="text" class="form-control" name="nome_fantasia" placeholder="Nome Fantasia" value="{{ $cliente->nome_fantasia }}"></input>
            </div>
        </div>

        {{-- Separação --}}

        <div class="field">
            <label class="label" for="CNPJ">CNPJ</label>

            <div class="control">
                <input type="text" class="form-control" name='cnpj' placeholder="CNPJ" value="{{ $cliente->cnpj }}"></input>
            </div>
        </div>

        {{-- Separação --}}


        <div class="field">
            <label class="label" for="endereco">Endereço</label>

            <div class="control">
                <input type="text" class="form-control" name="endereco" placeholder="Endereço" value="{{ $cliente->endereco }}" required></input>
            </div>
        </div>

        {{-- Separação --}}


        <div class="field">
            <label class="email" for="E-mail">E-mail</label>

            <div class="control">
                <input type="text" class="form-control" name="email" placeholder="E-mail" value="{{ $cliente->email }}" required></input>
            </div>
        </div>

        {{-- Separação --}}

        <div class="field">
            <label class="tel" for="tel">Telefone</label>
        
            <div class="control">
                <input type="text" class="form-control" name="tel" placeholder="Telefone" value="{{ $cliente->tel }}" required></input>
            </div>
        </div>

        {{-- Separação --}}

        <div class="field">
            <label class="name" for="name">Nome</label>

            <div class="control">
                <input type="text" class="form-control" name="name" placeholder="Nome" value="{{ $cliente->name }}" required></input>
            </div>
        </div>

        {{-- Separação --}}

        <div class="field">
            <label class="cpf" for="cpf">CPF</label>

            <div class="control">
                <input type="text" class="form-control" name="cpf" placeholder="CPF" value="{{ $cliente->cpf }}" required></input>
            </div>
        </div>

        {{-- Separação --}}

        <div class="field">
            <label class="cel" for="cel">Celular</label>

            <div class="control">
                <input type="text" class="form-control" name="cel" placeholder="Celular" value="{{ $cliente->cel }}" required></input>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button style="background-color: limegreen; padding-right: 18%; padding-left: 18%; color: white; font-weight: bold;" type="submit" class="form-control">Atualizar Cliente</button>
            </div>
        </div>
    </form>

    <form style="padding-right: 40%; padding-left: 40%;" method="POST" action="/clientes/{{ $cliente->id }}">
        @method('DELETE')
        @csrf

    <div class="field">
        <div class="control">
            <button style="background-color: red;color: white;font-weight: bold" type="submit" type="submit" class="form-control">Deletar Cliente</button>
        </div>
    </div>
</form>
<br>
<br>

@endsection