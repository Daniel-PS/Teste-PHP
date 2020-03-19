<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposta;
use App\Cliente;
use DB;
use App\Exports\PropostasExport;
use Maatwebsite\Excel\Facades\Excel;



class PropostasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $propostas = Proposta::where('owner_id', auth()->id())->get();
        return view('propostas.index', compact('propostas'));
    }

    public function export() 
{
        return Excel::download(new PropostasExport, 'proposta.xlsx');
}

    public function create()
    {
        $proposta = Proposta::where('owner_id', auth()->id())->get();
        $clientes = Cliente::where('owner_id', auth()->id())->get();
        return view('propostas.create', compact('proposta'), ['clientes' => $clientes]);
    }
    

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'cliente_id' => 'required',
            'endereco_obra' => 'required|max:100',
            'valor_total' => 'required',
            'sinal' => 'required|max:100',
            'quanti_parcelas' => 'required',
            'val_parcelas' => 'required',
            'data_pagamento' => 'required|max:30',
            'data_parcelas' => 'required',
            'arquivo' => 'required|mimes:pdf,doc',
            'status' => 'required',
        ]);
        $attributes['owner_id'] = auth()->id();

        Proposta::create($attributes);
        $request->arquivo->storeAs('arquivos', $request->arquivo->getClientOriginalName());


        return redirect('/propostas/create')->with('message', 'Proposta cadastrada com sucesso!');
    }


    public function edit(Proposta $proposta) 
    {
        $this->authorize('update', $proposta);
        return view('propostas.edit', compact('proposta'));
    }

    public function update(Proposta $proposta) 
    {
        $proposta->update(request(['cliente_id', 'endereco_obra', 'valor_total', 'sinal', 'quanti_parcelas', 'val_parcelas', 'data_pagamento', 'data_parcelas', 'arquivo', 'status']));
        return redirect('/propostas');
    }

    public function destroy(Proposta $proposta)
    {
        $proposta->delete();

        return redirect('propostas');
    }

}
