<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php: agregar al final
Route::get('/hola', function () {
    return '¡Hola desde Docker!';
});
use App\Models\Producto;

Route::get('/productos', function () {
    $productos = Producto::all();
    return view('productos', compact('productos'));
});
