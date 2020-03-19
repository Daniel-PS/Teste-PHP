@extends('layout')

@section('title', 'Nova Proposta')

@section('content')
<h1 style="margin-top: -2%; margin-left: -2%;text-align: center;">Cadastre uma Proposta</h1>
<p style="text-align: center;">{{ session('message') }}</p>
<form class="formularioProposta" method="POST" action="/propostas" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <select class="form-control" id="type" name="cliente_id">
            <option value="">Selecione o cliente</option>
            @foreach($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->name }}</option>
             @endforeach
        </select>
        @if ($errors->has('cliente_id'))
            <p>{{ $errors->first('cliente_id') }}</p>
        @endif
        <br>

        <input type="text" name="endereco_obra" class="form-control" placeholder="Endereço da Obra" value="{{ old('endereco_obra') }}" required>
        @if ($errors->has('endereco_obra'))
            <p>{{ $errors->first('endereco_obra') }}</p>
        @endif
        <br>

        <input type="number" name="valor_total" class="form-control" placeholder="Valor Total" value="{{ old('valor_total') }}" required>
        @if ($errors->has('valor_total'))
            <p>{{ $errors->first('valor_total') }}</p>
        @endif
        <br>


        <input type="text" name="sinal" class="form-control" placeholder="Sinal" value="{{ old('sinal') }}" required>
        @if ($errors->has('sinal'))
            <p>{{ $errors->first('sinal') }}</p>
        @endif
        <br>


        <input type="number" class="form-control" name="quanti_parcelas" placeholder="Quantidade de parcelas" value="{{ old('quanti_parcelas') }}" required>
        @if ($errors->has('quanti_parcelas'))
            <p>{{ $errors->first('quanti_parcelas') }}</p>
        @endif
        <br>


        <input type="number" name="val_parcelas" class="form-control" placeholder="Valor das parcelas" value="{{ old('val_parcelas') }}" required>
        @if ($errors->has('val_parcelas'))
            <p>{{ $errors->first('val_parcelas') }}</p>
        @endif
        <br>


        <input type="date" class="form-control" name="data_pagamento" placeholder="Data de início do pagamento" value="{{ old('data_pagamento') }}" required>
        @if ($errors->has('data_pagamento'))
            <p>{{ $errors->first('data_pagamento') }}</p>
        @endif
        <br>


        <input type="date" class="form-control"  name="data_parcelas" placeholder="Data das parcelas" value="{{ old('data_parcelas') }}" required>
    @if ($errors->has('data_parcelas'))
        <p>{{ $errors->first('data_parcelas') }}</p>
    @endif
    <br>

    <input style="margin-left: 27%;" type="file" name="arquivo" placeholder="" accept=".pdf,.doc,.docx">
    @if ($errors->has('arquivo'))
        <p>{{ $errors->first('arquivo') }}</p>
    @endif
    <br>

    <div class="text">
        <select class="form-control" name="status" placeholder="Status" value="" required>
            <option value="">Selecione um estado</option>
            <option value="Aberta">Aberta</option>
            <option value="Fechada">Fechada</option>
        </select>
        @if ($errors->has('status'))
            <p>{{ $errors->first('status') }}</p>
        @endif
        </div>
        <br>

    <button class="botaoProp" class="botao" type="submit">Salvar</button>
    <br>
    <br>
</form>


@endsection