@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Fornecedores</h1>
    <a href="{{ route('fornecedores.create') }}" class="btn btn-primary mb-3">Novo Fornecedor</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fornecedores as $fornecedor)
                <tr>
                    <td>{{ $fornecedor->nome }}</td>
                    <td>{{ $fornecedor->cnpj }}</td>
                    <td>
                        <a href="{{ route('fornecedores.edit', $fornecedor) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('fornecedores.destroy', $fornecedor) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Tem certeza que deseja excluir?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
