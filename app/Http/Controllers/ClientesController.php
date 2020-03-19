<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use DB;
use Illuminate\Support\Facades\Hash;

class ClientesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clientes = Cliente::where('owner_id', auth()->id())->get();

        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

     public function store()
    {
        $attributes = request()->validate([
            'razao_social' => 'required|max:30',
            'nome_fantasia' => 'required|max:30',
            'cnpj' => 'required|unique:clientes',
            'endereco' => 'required|max:100',
            'email' => 'required|unique:clientes',
            'tel' => 'required',
            'name' => 'required|max:30',
            'cpf' => 'required|unique:clientes',
            'cel' => 'required',
        ]);

        $attributes['owner_id'] = auth()->id();

        Cliente::create($attributes);

        return redirect('/clientes/create')->with('message', 'Cliente cadastrado com sucesso!');
    }

    public function edit(Cliente $cliente) 
    {
        $this->authorize('update', $cliente);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Cliente $cliente) 
    {
        $cliente->update(request(['razao_social', 'nome_fantasia', 'cnpj', 'endereco', 'email', 'tel', 'name', 'cpf', 'cel']));
        return redirect('/clientes');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect('clientes');
    }

}
