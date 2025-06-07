<?php

namespace App\Http\Controllers;

use App\Models\CategoriaProduto;
use App\Http\Requests\CategoriaProdutoRequest;

class CategoriaProdutoController extends Controller
{
    public function index()
    {
        $categorias = CategoriaProduto::all();
        return view('categoria-produtos.index', compact('categorias'));
    }

    public function create()
    {
        return view('categoria-produtos.create');
    }

    public function store(CategoriaProdutoRequest $request)
    {
        CategoriaProduto::create($request->validated());
        return redirect()->route('categoria-produtos.index')->with('success', 'Categoria cadastrada com sucesso!');
    }

    public function edit(CategoriaProduto $categoria_produto)
    {
        return view('categoria-produtos.edit', ['categoria_produto' => $categoria_produto]);
    }

    public function update(CategoriaProdutoRequest $request, CategoriaProduto $categoria_produto)
    {
        $categoria_produto->update($request->validated());
        return redirect()->route('categoria-produtos.index')->with('success', 'Categoria atualizada com sucesso!');
    }

    public function destroy(CategoriaProduto $categoria_produto)
    {
        $categoria_produto->delete();
        return redirect()->route('categoria-produtos.index')->with('success', 'Categoria removida com sucesso!');
    }
}
