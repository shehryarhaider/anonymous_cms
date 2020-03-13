<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('layouts.partials.Headlinks')

</head>
<body class="container-fluid p-0">

            @include('layouts.Partials.nav')

        <main>

            @yield('content')

        </main>
</body>
</html>
