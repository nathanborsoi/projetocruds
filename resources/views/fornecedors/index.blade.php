@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Fornecedores</h1>
    <a href="{{ route('fornecedors.create') }}" class="btn btn-primary mb-3">Novo Fornecedor</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fornecedores as $fornecedor)
                <tr>
                    <td>{{ $fornecedor->nome }}</td>
                    <td>{{ $fornecedor->cnpj }}</td>
                    <td>{{ $fornecedor->email }}</td>
                    <td>
                        <a href="{{ route('fornecedors.edit', $fornecedor) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('fornecedors.destroy', $fornecedor) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                        </form>
                    </td>                   
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
