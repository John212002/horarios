<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Registrar Nuevo Grupo - Gestión de Instituciones Educativas">
    <title>Registrar Grupo</title>
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
            <h1>Registrar Nuevo Grupo</h1>
            <div>
            <h2>Institución: {{ $nombre }}</h2>
            </div>
        </div>

        <div class="title">
            <h3>Formulario de Registro de Grupo</h3>
        </div>
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


        <form action="{{ route('grupos.store') }}" method="POST" class="form-group">
            @csrf
            <label for="nombre">Nombre del Grupo:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required value="{{ old('nombre') }}">
            @error('nombre')
                <div class="text-danger" style="margin-top: 5px;">{{ $message }}</div>
            @enderror

            <label for="idMateria">Materia:</label>
            <select name="idMateria" id="idMateria" class="form-control" required>
                <option value="">Seleccione una materia</option>
                @foreach ($materias as $materia)
                    <option value="{{ $materia->id }}" {{ old('idMateria') == $materia->id ? 'selected' : '' }}>
                        {{ $materia->nombre }}
                    </option>
                @endforeach
            </select>
            @error('idMateria')
                <div class="text-danger" style="margin-top: 5px;">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary mt-3">Registrar Grupo</button>
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
