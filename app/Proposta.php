<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposta extends Model
{
    protected $fillable = [
    'endereco_obra',
    'valor_total',
    'sinal',
    'quanti_parcelas',
    'val_parcelas',
    'data_pagamento',
    'data_parcelas',
    'arquivo',
    'status',
    'owner_id',
    'cliente_id',
    ];
}