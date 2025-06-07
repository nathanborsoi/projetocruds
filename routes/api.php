<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClienteApiController;

// Todas as rotas da API de Cliente
Route::apiResource('clientes', ClienteApiController::class);
