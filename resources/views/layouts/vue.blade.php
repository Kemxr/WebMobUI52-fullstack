<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="api-base-url" content="{{ url('api/v1') }}">
        <link rel="icon" type="image/svg+xml" href="{{ asset('mazeIcon.svg') }}">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=VT323&display=swap" rel="stylesheet">
        <title>@yield('title')</title>
        {{-- Exposer le user et le token pour utilisation dans la vue --}}
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
                'user' => Auth::user(),
            ]) !!};
        </script>
        @yield('app')
    </head>
    <body style="margin: 0; padding: 0; overflow: hidden;">
        <div id="app">
            @yield('content')
        </div>
    </body>

</html>
