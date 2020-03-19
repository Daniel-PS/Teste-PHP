@extends('layout')

@section('title', 'Listagem')

@section('content')
    <h1 style="font-size: 27pt;">Lista de Propostas</h1>
    <div class="teste">
        <p class="mensagem">Clique no identificador (ID) para editar as propostas.</p>
        <a style="display: table-cell; text-decoration:none" class="form-control" href="{{action('PropostasController@export')}}">Exportar Excel</a>


    <table class="table" id="table">
        <tr class="trCliente">
            <th class="id">ID</th>
            <th class="cliente">Cliente</th>
            <th class="endereco_obra">Endereço da Obra</th>
            <th class="valor_total">Valor Total</th>
            <th class="sinal">Sinal</th>
            <th class="quanti_parcelas">Quantidade de Parcelas</th>
            <th class="val_parcelas">Valor das Parcelas</th>
            <th class="data_pagamento">Data de Pagamento</th>
            <th class="data_parcelas">Data de Parcelas</th>
            <th class="arquivo">Arquivo</th>
            <th class="status">Status</th>

        </tr>
        <?php foreach ($propostas as $proposta) { ?>
            <tr class="trCliente2">
                <td class="id"><a href="/propostas/{{ $proposta->id}}/edit">{{ $proposta->id }}</a></td>
                <td class="cliente">Vazio</td>
                <td class="endereco_obra">{{ $proposta->endereco_obra }}</td>
                <td class="valor_total">{{ $proposta->valor_total }}</td>
                <td class="sinal">{{ $proposta->sinal }}</td>
                <td class="quanti_parcelas">{{ $proposta->quanti_parcelas }}</td>
                <td class="val_parcelas">{{ $proposta->val_parcelas }}</td>
                <td class="data_pagamento">{{ $proposta->data_pagamento }}</td>
                <td class="data_parcelas">{{ $proposta->data_parcelas }}</td>
                <td class="arquivo">{{ $proposta->arquivo }}</td>
                <td class="status">{{ $proposta->status }}</td>
            </tr>
            </div>
        <?php }0 ?>
    </div>
@endsection