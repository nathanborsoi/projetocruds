<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|min:3|max:100',
            'preco' => 'required|numeric|min:0',
            'categoria_produto_id' => 'required|exists:categoria_produtos,id',
            'fornecedor_id' => 'required|exists:fornecedores,id',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O nome do produto é obrigatório.',
            'nome.min' => 'O nome deve ter pelo menos :min caracteres.',
            'nome.max' => 'O nome deve ter no máximo :max caracteres.',
            'preco.required' => 'O preço é obrigatório.',
            'preco.numeric' => 'O preço deve ser numérico.',
            'preco.min' => 'O preço deve ser igual ou maior que zero.',
            'categoria_produto_id.required' => 'Selecione uma categoria.',
            'categoria_produto_id.exists' => 'Categoria inválida.',
            'fornecedor_id.required' => 'Selecione um fornecedor.',
            'fornecedor_id.exists' => 'Fornecedor inválido.',
        ];
    }
}
