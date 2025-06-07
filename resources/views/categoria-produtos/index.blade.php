@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Categorias de Produto</h1>
    <a href="{{ route('categoria-produtos.create') }}" class="btn btn-primary mb-3">Nova Categoria</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria_produto)
                <tr>
                    <td>{{ $categoria_produto->nome }}</td>
                    <td>
                        <a href="{{ route('categoria-produtos.edit', $categoria_produto) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('categoria-produtos.destroy', $categoria_produto) }}" method="POST" class="d-inline"
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
