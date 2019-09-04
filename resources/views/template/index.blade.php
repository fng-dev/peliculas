<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Peliculas</title>

    @stack('css')
</head>

<body>

    <div class="container-fluid m-0 p-0" id="app">

        <menu-hor></menu-hor>

        @yield('content')

    </div>

    <script src="/js/app.js"></script>
</body>

</html>
