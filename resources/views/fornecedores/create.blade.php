@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Novo Fornecedor</h1>
    <form action="{{ route('fornecedores.store') }}" method="POST">
        @csrf
        @include('fornecedores.form')
    </form>
</div>
@endsection
