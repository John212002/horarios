<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lista de pisos de la institución">
    <title>Listado de pisos</title>
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
            <h1>Listado de pisos</h1>
            <div>
            <h2>Institución: {{ $nombre }}</h2>
            </div>
        </div>

        <ul class="listado-pisos">
            @foreach ($pisos as $piso)
                <li class="edificio-item">
                    <span>{{ $piso->numero }} - {{ $piso->edificio->nombre }}</span>

                    <div class="btn-group">
                        <a href="{{ route('pisos.edit', $piso->id) }}" class="btn btn-edit">Editar</a>
                    </div>
                </li>
            @endforeach
        </ul>

        <div class="mt-4">
            <a href="{{ route('pisos.create') }}" class="btn btn-primary">Registrar piso</a>
        </div>
        <div class="mt-4">
            <a href="{{ url('main') }}" class="btn btn-info">Regresar al menú</a>
        </div>
    </div>

    <script>
        function confirmDeletion(button) {
            if (confirm('¿Esta seguro que desea eliminar este piso? Esta acción no se podrá deshacer.')) {
                button.closest('form').submit();
            }
        }
    </script>
</body>
</html>
