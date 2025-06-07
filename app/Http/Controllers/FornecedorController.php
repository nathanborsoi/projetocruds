<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use App\Http\Requests\FornecedorRequest;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = Fornecedor::all();
        return view('fornecedors.index', compact('fornecedores'));
    }

    public function create()
    {
        return view('fornecedors.create');
    }

    public function store(FornecedorRequest $request)
    {
        $data = $request->only(['nome', 'cnpj', 'email']);
        Fornecedor::create($data);

        return redirect()->route('fornecedors.index')->with('success', 'Fornecedor cadastrado com sucesso!');
    }

    public function edit(Fornecedor $fornecedor)
    {
        return view('fornecedors.edit', compact('fornecedor'));
    }

    public function update(FornecedorRequest $request, Fornecedor $fornecedor)
    {
        $fornecedor->update($request->validated());

        return redirect()->route('fornecedors.index')->with('success', 'Fornecedor atualizado com sucesso!');
    }

    public function destroy(Fornecedor $fornecedor)
    {
        $fornecedor->delete();

        return redirect()->route('fornecedors.index')->with('success', 'Fornecedor removido com sucesso!');
    }
}
