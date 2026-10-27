<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php: agregar al final
Route::get('/hola', function () {
    return '¡Hola desde Docker!';
});
Route::get('/productos', [ProductoController::class, 'index']);