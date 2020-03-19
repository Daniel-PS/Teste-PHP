@extends('layout')

@section('title', 'Listagem')

@section('content')
    <h1 style="font-size: 27pt;">Lista de Clientes</h1>
    <div class="teste">
        <p class="mensagem">Clique no identificador (ID) para editar os clientes.</p>

    <table class="table" id="table">
        <tr class="trCliente">
            <td class="id">ID</td>
            <td class="razao_social">Razão Social</td>
            <td class="nome_fantasia">Nome Fantasia</td>
            <td class="cnpj">CNPJ</td>
            <td class="endereco">Endereço</td>
            <td class="email" id="email">E-mail</td>
            <td class="tel">Telefone</td>
            <td class="name">Nome</td>
            <td class="cpf">CPF</td>
            <td class="cel">Celular</td>

        </tr>
        <?php foreach ($clientes as $cliente) { ?>
            <tr class="trCliente2">
                <td class="id"><a href="/clientes/{{ $cliente->id}}/edit">{{ $cliente->id }}</a></td>
                <td class="razao_social">{{ $cliente->razao_social }}</td>
                <td class="nome_fantasia">{{ $cliente->nome_fantasia }}</td>
                <td class="cnpj">{{ $cliente->cnpj }}</td>
                <td class="endereco">{{ $cliente->endereco }}</td>
                <td class="email">{{ $cliente->email }}</td>
                <td class="tel">{{ $cliente->tel }}</td>
                <td class="name">{{ $cliente->name }}</td>
                <td class="cpf">{{ $cliente->cpf }}</td>
                <td class="cel">{{ $cliente->cel }}</td>
            </tr>
        <?php }0 ?>
    </table>
</div>
@endsection