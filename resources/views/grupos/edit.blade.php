<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Editar Grupo - Gestión de Instituciones Educativas">
    <title>Editar Grupo</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <!-- Vincular CSS -->
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <!-- Barra lateral -->
  <x-sidebar />
    <div class="container">
        <div class="header">
            <h1>Editar Grupo</h1>
            <div>
            <h2>Institución: {{ $nombre }}</h2>
            </div>
        </div>

        <div class="title">
            <h3>Formulario de Edición de Grupo</h3>
        </div>

        <form action="{{ route('grupos.update', $grupo->idGrupo) }}" method="POST" class="form-group">
            @csrf
            @method('PUT')

            <label for="nombre">Nombre del Grupo:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $grupo->nombre }}" required>

            <label for="idMateria">Materia:</label>
            <select name="idMateria" id="idMateria" class="form-control" required>
                <option value="">Seleccione una materia</option>
                @foreach ($materias as $materia)
                    <option value="{{ $materia->id }}" {{ $materia->id == $grupo->idMateria ? 'selected' : '' }}>
                        {{ $materia->nombre }}
                    </option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-primary mt-3">Actualizar Grupo</button>
        </form>

        <div class="mt-4">
            <a href="{{ route('grupos.vista') }}" class="btn btn-secondary">Volver al Listado de Grupos</a>
        </div>
        <div class="mt-4">
            <a href="{{ url('main') }}" class="btn btn-info">Regresar al Menú</a>
        </div>
    </div>
</body>
</html>
