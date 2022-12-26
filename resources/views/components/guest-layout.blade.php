<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <x-partials.head />
        @stack('stylesheet')
    </head>

    <body class="app sidebar-mini ltr login-img">

        {{ $slot}}

        <x-partials.footer />
        <x-partials.default-scripts />
        @stack('scripts')
    </body>

</html>