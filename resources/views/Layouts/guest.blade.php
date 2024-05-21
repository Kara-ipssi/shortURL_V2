<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-TCX9CKYDSN"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
    
            gtag('config', 'G-TCX9CKYDSN');
        </script>

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
        <script src="{{ asset('scripts/tailwindcss.js')}}"></script>
        

        <!-- Scripts -->
        @yield('scripts')
        
    </head>
    <body class="bg-gray-100">
        <div class="min-h-[100vh] relative">
            @yield('header')
            @yield('content')
            @yield('footer')
        </div>
    </body>
</html>
