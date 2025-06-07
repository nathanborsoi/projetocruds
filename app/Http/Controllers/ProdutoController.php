<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Fornecedor;
use App\Models\CategoriaProduto;
use App\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::with(['fornecedor', 'categoriaProduto'])->get();
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        $fornecedores = Fornecedor::all();
        $categorias = CategoriaProduto::all();
        return view('produtos.create', compact('fornecedores', 'categorias'));
    }

    public function store(ProdutoRequest $request)
    {
        Produto::create($request->validated());
        return redirect()->route('produtos.index')->with('success', 'Produto cadastrado com sucesso!');
    }

    public function edit(Produto $produto)
    {
        $fornecedores = Fornecedor::all();
        $categorias = CategoriaProduto::all();
        return view('produtos.edit', compact('produto', 'fornecedores', 'categorias'));
    }

    public function update(ProdutoRequest $request, Produto $produto)
    {
        $produto->update($request->validated());
        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produtos.index')->with('success', 'Produto removido com sucesso!');
    }
}
