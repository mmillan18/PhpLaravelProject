<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TechNova Solutions - Generador de ID de Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">TechNova Solutions</h1>
        <h2 class="text-center">Generador de ID de Empleado</h2>

        <div class="text-center mb-4">
            <a href="/historial" class="btn btn-info">Ver Historial de Empleados</a>
        </div>

        @if (isset($idEmpleado))
            <div class="alert alert-success text-center mt-4">
                <h3>ID generado para {{ $nombre }} {{ $apellido }}:</h3>
                <h2>{{ $idEmpleado }}</h2>
            </div>
        @endif

        <form method="POST" action="/generar-id" class="mt-4">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}" required>
                </div>
                <div class="col-md-4">
                    <label for="apellido" class="form-label">Apellido:</label>
                    <input type="text" name="apellido" id="apellido" class="form-control" value="{{ old('apellido') }}" required>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">Generar ID</button>
            </div>
        </form>
    </div>
</body>
</html>
