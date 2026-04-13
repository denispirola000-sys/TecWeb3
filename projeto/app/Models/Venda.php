<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use App\Models\User;
use App\Models\ItemVenda;

class Venda extends Model
{
    protected $fillable = [
        'cliente_id',
        'user_id',
        'valor_total',
        'forma_pagamento'
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function itens(){
        return $this->hasMany(ItemVenda::class);
    }
    
}
