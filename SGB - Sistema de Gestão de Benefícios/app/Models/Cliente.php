<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo_cliente',
        'nome',
        'razao_social',
        'cpf_cnpj',
        'rg',
        'estado_civil',
        'nome_pai',
        'nome_mae',
        'inscricao_estadual',
        'profissao',
        'vinculo_traba',
        'renda_mensal',
        'created_at',
        'updated_at',
    ];

    public function rules()
    {

        return  [
            'tipo_cliente' => 'required',
            'nome' => 'required',
            'cpf_cnpj' => 'required|unique:clientes',
        ];
    }

    public function feedback()
    {
        return  [
            'required' => 'O campo :attribute é obrigatório',
            'cpf_cnpj.unique' => 'O CPF ou CNPJ já existe',
        ];
    }
}
