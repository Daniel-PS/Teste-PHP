<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
    'razao_social',
    'nome_fantasia',
    'cnpj',
    'endereco',
    'email',
    'tel',
    'name',
    'cpf',
    'cel',
    'owner_id',
    ];

}
