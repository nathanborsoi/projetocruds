<?php

namespace App\Http\Controllers\Api;

use App\Models\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ClienteRequest;

class ClienteApiController extends Controller
{
    public function index()
    {
        return Cliente::all();
    }

    public function store(ClienteRequest $request)
    {
        return Cliente::create($request->validated());
    }

    public function show(Cliente $cliente)
    {
        return $cliente;
    }

    public function update(ClienteRequest $request, Cliente $cliente)
    {
        $cliente->update($request->validated());
        return $cliente;
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return response()->json(null, 204);
    }
}
