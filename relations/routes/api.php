<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;


//criar usuario
Route::post('/users', [UserController::class, 'createUser']);

// listar usuario
Route::get('/users', [UserController::class, 'index']);

//buscar por 1 ususario pelo id
Route::get('/users/{id}', [UserController::class, 'findOne']);




Route::get('/addresses',[AddressController::class, 'index']);

//criar endereço
Route::post('/addresses', [AddressController::class, 'createAddress']);

//buscar 1 enderepo por id
Route::get('/addresses/{id}', [AddressController::class, 'findOne']);



