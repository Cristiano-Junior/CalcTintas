<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    @stack('styles')

</head>

<body>
    <div id="app">
        <nav class="navbar">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name') }} de Tintas
            </a>
            <ul class="navbar-links">
                <li>
                    <a href="https://www.linkedin.com/in/cristiano-junior-b64668186/" target="_blank">LinkedIn</a>
                </li>
                <li>
                    <a href="https://github.com/Cristiano-Junior" target="_blank">GitHub</a>
                </li>
            </ul>
        </nav>
        <div class="center">
            <h3>Informe os valores solicitados para descobrir a quantidade correta de tinta!</h3>
        </div>
        <main class="container">
            @yield('content')
        </main>
    </div>
    <!--- Scripts -->
    @stack('scripts')
</body>

</html>