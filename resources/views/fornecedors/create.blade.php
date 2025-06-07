@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastrar Fornecedor</h1>
    <form action="{{ route('fornecedors.store') }}" method="POST">
        @csrf
        @include('fornecedors.form')
    </form>
</div>
@endsection
