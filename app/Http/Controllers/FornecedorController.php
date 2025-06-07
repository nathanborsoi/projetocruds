<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use App\Http\Requests\FornecedorRequest;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = Fornecedor::all();
        return view('fornecedores.index', compact('fornecedores'));
    }

    public function create()
    {
        return view('fornecedores.create');
    }

    public function store(FornecedorRequest $request)
    {
        Fornecedor::create($request->validated());
        return redirect()->route('fornecedores.index')->with('success', 'Fornecedor cadastrado com sucesso!');
    }

    public function edit(Fornecedor $fornecedor)
    {
        return view('fornecedores.edit', compact('fornecedor'));
    }

    public function update(FornecedorRequest $request, Fornecedor $fornecedor)
    {
        $fornecedor->update($request->validated());
        return redirect()->route('fornecedores.index')->with('success', 'Fornecedor atualizado com sucesso!');
    }

    public function destroy(Fornecedor $fornecedor)
    {
        $fornecedor->delete();
        return redirect()->route('fornecedores.index')->with('success', 'Fornecedor removido com sucesso!');
    }
}
