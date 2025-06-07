@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Categoria de Produto</h1>
    <form action="{{ route('categoria-produtos.update', $categoria_produto) }}" method="POST">
        @csrf
        @method('PUT')
        @include('categoria_produtos.form')
    </form>
</div>
@endsection
