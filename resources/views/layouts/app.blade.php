<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Incluye los estilos -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">  Reemplaza 'assets/stylesheet.css' -->
    <!-- <link href="{{ asset('assets/stylesheet.css') }}" rel="stylesheet"> Personalizado -->
</head>
<body>
<div class="container">
    @yield('content')
</div>
<!-- Incluye los scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('assets/script.js') }}"></script> <!-- Personalizado -->
</body>
</html>
