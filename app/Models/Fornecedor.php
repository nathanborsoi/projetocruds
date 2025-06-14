<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    // Nome correto da tabela
    protected $table = 'fornecedores';

    protected $fillable = ['nome', 'cnpj', 'email'];

    public function produtos()
{
    return $this->hasMany(Produto::class);
}
}
