<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Números Aleatorios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center mt-5">
        <h1>Número aleatorio generado: {{ $numero }}</h1>

        <!-- Botón para generar un nuevo número -->
        <form method="POST" action="/generar">
            @csrf
            <button type="submit" class="btn btn-primary mt-3">Generar nuevo número</button>
        </form>
    </div>
</body>
</html>
