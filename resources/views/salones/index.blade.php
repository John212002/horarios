<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lista de salones de la institución">
    <title>Listado de salones</title>
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
            <h1>Listado de salones</h1>
            <div>
            <h2> {{ $nombre }}</h2>
            </div>
        </div>
        <x-messages/>

        <ul class="lista-salones">
            @foreach ($salones as $salon)
                <li class="salon-item">
                    <span>{{ $salon->nombre }} - {{ $salon->piso->nombre }} ({{ $salon->edificio }})</span>
                    <div class="btn-group">
                        <a href="{{ route('salones.edit', $salon->idSalon) }}" class="btn btn-edit">Editar</a>
                    </div>
                </li>
            @endforeach
        </ul>

        <div class="mt-4">
            <a href="{{ route('salones.create') }}" class="btn btn-primary">Registrar salón</a>
        </div>
        <div class="mt-4">
            <a href="{{ url('main') }}" class="btn btn-info">Regresar al menú</a>
        </div>
    </div>

    <script>
        function confirmDeletion(button) {
            if (confirm('¿Esta seguro de que desea eliminar este salon? Esta acción no se podrá deshacer.')) {
                button.closest('form').submit();
            }
        }
    </script>
</body>
</html>
