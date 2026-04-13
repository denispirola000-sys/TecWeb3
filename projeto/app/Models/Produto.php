<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ItemVenda;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'preco',
        'estoque'
    ];
    
    public function itens(){
        return $this->hasMany(ItemVenda::class);
    }
}
