<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;
use App\Models\Venda;

class ItemVenda extends Model
{
    protected $fillable = [
        'venda_id',
        'produto_id',
        'quantidade',
        'preco_unitario'
    ];

    public function venda(){
        return $this->belongsTo(Venda::class);
    }

    public function produto(){
        return $this->belongsTo(Produto::class);
    }

    
}
