<?php

use App\Http\Controllers\UsuarioController;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/usuario', [UsuarioController::class, 'store']);

Route::get('/usuario/{id}/find', [UsuarioController::class, 'findById']);

Route::get('/Usuario', [UsuarioController::class, 'index']);

Route::get('/Usuario/search', [UsuarioController::class, 'searchByName']);

Route::get('/usuario/search', [UsuarioController::class, 'searchByEmail']);

Route::delete('/usuario/{id}/delete', [UsuarioController::class, 'delete']);

Route::put('/usuario', [UsuarioController::class, 'update']);

