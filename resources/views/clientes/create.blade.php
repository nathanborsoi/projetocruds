@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Novo Cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        @include('clientes.form')
    </form>
</div>
@endsection
