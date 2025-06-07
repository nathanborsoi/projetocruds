@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Novo Produto</h1>
    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        @include('produtos.form')
    </form>
</div>
@endsection
