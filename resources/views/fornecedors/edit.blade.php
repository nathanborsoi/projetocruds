@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Fornecedor</h1>
    <form action="{{ route('fornecedors.update', $fornecedor) }}" method="POST">
        @csrf
        @method('PUT')
        @include('fornecedors.form')
    </form>
</div>
@endsection
