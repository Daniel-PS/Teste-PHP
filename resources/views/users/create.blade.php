@extends('layout')

@section('title', 'Cadastrar')

@section('content')
    <h1>Cadastre um novo usuário</h1>
    <p>{{ session('message') }}</p>
    <form method="POST" action="/usuarios">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="text" name="name" placeholder="nome" required>
        @if ($errors->has('name'))
            <p>{{ $errors->first('name') }}</p>
        @endif

        <input type="email" name="email" id="" placeholder="email" required>
        @if ($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
        @endif

        <input type="password" name="password" id="" placeholder="senha" required>
        @if ($errors->has('password'))
            <p>{{ $errors->first('password') }}</p>
        @endif

        <button type="submit">Cadastrar</button>
    </form>
@endsection