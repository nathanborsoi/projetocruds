@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Fornecedor</h1>
    <form action="{{ route('fornecedores.update', $fornecedor) }}" method="POST">
        @csrf
        @method('PUT')
        @include('fornecedores.form')
    </form>
</div>
@endsection
