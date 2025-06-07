@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nova Categoria de Produto</h1>
    <form action="{{ route('categoria-produtos.store') }}" method="POST">
        @csrf
        @include('categoria-produtos.form')
    </form>
</div>
@endsection
