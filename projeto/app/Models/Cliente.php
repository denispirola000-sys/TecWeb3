<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Venda;

class Cliente extends Model
{
    protected $fillable =[
        'nome',
        'telefone',
        'email',
        'endereco',
        'bairro',
        'cidade',
        'uf',
        'cep'
    ];
    
    public function vendas(){
        return $this->hasMany(Venda::class);
    }
}


