<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Grupo Codware')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('partials.styles')
</head>

<body>

    <div class="page-wrapper">

        @include('partials.header')

        @yield('content')

        @include('partials.footer')

    </div>

    @include('partials.scripts')

</body>
</html>