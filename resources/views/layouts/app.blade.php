<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Colombia Aprende - @yield('titulo')</title>
  @vite('resources/css/app.css')
</head>
<body>
    @yield('titulo')
    <hr>
    @yield('contenido')
    <hr>
</body>
<footer>
    Colombia Aprende - Todos los derechos reservados {{ now()->year }}
</footer>
</html>