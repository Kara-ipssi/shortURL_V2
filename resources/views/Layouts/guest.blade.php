<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @yield('title', 'Laravel')
        </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        {{-- import app.css file --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Scripts -->
        @yield('scripts')
        
    </head>
    <body class="bg-gray-100">
        <header>
            @yield('header')
        </header>

        <div id="main">
            @yield('content')
        </div>

        <footer>
            @yield('footer')
        </footer>
    </body>
</html>
