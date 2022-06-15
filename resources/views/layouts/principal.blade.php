<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('materialize/css/materialize.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>La Tienda de PHP</title>
</head>
<body>
    <nav class="green darken-1">
        <div class="nav-wrapper">
        <a href="#!" class="brand-logo center">LA TIENDA PHP</a>
        <ul class="left hide-on-med-and-down">
            <li><a href="{{ url ('productos/create') }}">Agregar producto</a></li>
            <li><a href="{{ url ('productos/') }}">Producto</a></li>
            <li class="active"><a href="{{ url ('cart/') }}">Catálogo</a></li>
        </ul>
        </div>
    </nav>

    <div class="container">
        @yield('contenido')
    </div>

<script src="{{ asset('materialize/js/materialize.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, []);
    });
</script>
@yield('javascript')
</body>
</html>