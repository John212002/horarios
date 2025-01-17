<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Edición de Piso - Gestión de Instituciones Educativas">
    <title>Editar Piso</title>
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
            <h1>Editar piso</h1>
            <div>
            <h2>Institución: {{ $nombre }}</h2>
            </div>
        </div>

        <form action="{{ route('pisos.update', $piso->id) }}" method="POST" class="form-group">
            @csrf
            @method('PUT')
            <label for="piso">Número de Piso:</label>
            <input type="text" name="piso" id="piso" class="form-control" value="{{ old('numero', $piso->numero) }}" required>
            @error('piso')
                <div class="text-danger" style="margin-top: 5px;">{{ $message }}</div>
            @enderror

            <label for="idEdificio">Edificio:</label>
            <select name="idEdificio" id="idEdificio" class="form-control" required>
                <option value="">Seleccione un edificio</option>
                @foreach ($edificios as $edificio)
                    <option value="{{ $edificio->id }}" {{ old('idEdificio', $piso->idEdificio) == $edificio->id ? 'selected' : '' }}>
                        {{ $edificio->nombre }}
                    </option>
                @endforeach
            </select>
            @error('idEdificio')
                <div class="text-danger" style="margin-top: 5px;">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary mt-3">Guardar cambios</button>
        </form>

        <div class="mt-4">
            <a href="{{ route('pisos.vista') }}" class="btn btn-secondary">Volver al listado de pisos</a>
        </div>
    </div>
</body>
</html>
