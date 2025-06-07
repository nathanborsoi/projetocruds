<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'preco', 'categoria_produto_id', 'fornecedor_id'];

    public function fornecedor()
{
    return $this->belongsTo(Fornecedor::class);
}

    public function categoriaProduto()
    {
        return $this->belongsTo(CategoriaProduto::class, 'categoria_produto_id');
    }
    
}
