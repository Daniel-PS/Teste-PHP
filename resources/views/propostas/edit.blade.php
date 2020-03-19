@extends('layout')

@section('title', 'Cadastro de Clientes')

@section('content')

    <h1 style="text-align: center;" class="title">Editar Propostas</h1>

    <form class="formEdit" method="POST" action="/propostas/{{ $proposta->id }}">
        @method('PATCH')
        @csrf
        
        {{-- Separação --}}

        <div class="field">
            <label class="label" for="endereco_obra">Endereço da Obra</label>

            <div class="control">
                <input type="text" class="form-control" name="endereco_obra" placeholder="Endereço da Obra" value="{{ $proposta->endereco_obra }}"></input>
            </div>
        </div>

        {{-- Separação --}}

        <div class="field">
            <label class="label" for="valor_total">Valor Total</label>

            <div class="control">
                <input type="text" class="form-control" name='valor_total' placeholder="Valor Total" value="{{ $proposta->valor_total }}"></input>
            </div>
        </div>

        {{-- Separação --}}


        <div class="field">
            <label class="label" for="sinal">Sinal</label>

            <div class="control">
                <input type="text" class="form-control" name="sinal" placeholder="Sinal" value="{{ $proposta->sinal }}" required></input>
            </div>
        </div>

        {{-- Separação --}}


        <div class="field">
            <label class="email" for="quanti_parcelas">Quantidade de Parcelas</label>

            <div class="control">
                <input type="text" class="form-control" name="quanti_parcelas" placeholder="Quantidade de Parcelas" value="{{ $proposta->quanti_parcelas }}" required></input>
            </div>
        </div>

        {{-- Separação --}}

        <div class="field">
            <label class="tel" for="val_parcelas">Valor das Parcelas</label>
        
            <div class="control">
                <input type="text" class="form-control" name="tel" placeholder="Valor das Parcelas" value="{{ $proposta->val_parcelas }}" required></input>
            </div>
        </div>

        {{-- Separação --}}

        <div class="field">
            <label class="name" for="name">Data do Pagamento</label>

            <div class="control">
                <input type="text" class="form-control" name="name" placeholder="Data Pagamento" value="{{ $proposta->data_pagamento }}" required></input>
            </div>
        </div>

        {{-- Separação --}}

        <div class="field">
            <label class="cpf" for="data_parcelas">Data das Parcelas</label>

            <div class="control">
                <input type="text" class="form-control" name="cpf" placeholder="Data das Parcelas" value="{{ $proposta->data_parcelas }}" required></input>
            </div>
        </div>

        {{-- Separação --}}

        <div class="field">
            <label class="cel" for="cel">Arquivo</label>

            <div class="control">
                <input type="text" class="form-control" name="cel" placeholder="Arquivo" value="{{ $proposta->arquivo }}" required></input>
            </div>
        </div>
        
        {{-- Separação --}}

        <div class="field">
            <label class="cel" for="cel">Status</label>

            <div class="control">
                <input type="text" class="form-control" name="cel" placeholder="Status" value="{{ $proposta->status }}" required></input>
            </div>
        </div>
<br>
        <div class="field">
            <div class="control">
                <button style="background-color:limegreen; color: white; font-weight: bold;" type="submit" class="form-control">Atualizar Proposta</button>
            </div>
        </div>
    </form>

    <form style="padding-right: 40%; padding-left: 40%;" method="POST" action="/propostas/{{ $proposta->id }}">
        @method('DELETE')
        @csrf

    <div class="field">
        <div class="control">
            <button style="background-color: red;color: white;font-weight: bold" type="submit" class="form-control">Deletar Proposta</button>
        </div>
    </div>
</form>
<br>
<br>

@endsection