<!DOCTYPE html>
<html>
<head>
    <title>Lista de Productos</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    <ul>
        @foreach ($productos as $producto)
            <li>{{ $producto->nombre }} - Gs. {{ number_format($producto->precio, 0, ',', '.') }}</li>
        @endforeach
    </ul>
</body>
</html>