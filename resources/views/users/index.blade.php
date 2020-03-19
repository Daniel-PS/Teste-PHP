@extends('layout')

@section('title', 'Listagem')

@section('content')
    <h1 style="font-size: 27pt;">Lista de Cadastro</h1>
    <table>
        <tr>
            <td class="nome">Nome</td>
            <td class="email">Email</td>
        </tr>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td class="username">{{ $user->name }}</td>
                <td class="useremail">{{ $user->email }}</td>
            </tr>
        <?php }0 ?>
    </table>
@endsection