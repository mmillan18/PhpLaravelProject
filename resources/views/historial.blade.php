<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TechNova Solutions - Historial de Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">TechNova Solutions</h1>
        <h2 class="text-center">Historial de Empleados</h2>

        <div class="text-center mb-4">
            <a href="/" class="btn btn-secondary">Volver al Generador</a>
        </div>

        @if ($empleados->isEmpty())
            <p class="text-center">No hay empleados registrados.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID Interno</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>ID de Empleado</th>
                        <th>Fecha de Creación</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $empleado)
                        <tr>
                            <td>{{ $empleado->id }}</td>
                            <td>{{ $empleado->nombre }}</td>
                            <td>{{ $empleado->apellido }}</td>
                            <td>{{ $empleado->id_empleado }}</td>
                            <td>{{ $empleado->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
