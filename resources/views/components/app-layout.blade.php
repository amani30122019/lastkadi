<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <x-partials.head />
        @stack('stylesheet')
    </head>

    <body class="app sidebar-mini ltr">

        {{ $slot}}

        <x-partials.footer />
        <x-partials.default-scripts />
        @stack('scripts')
        <script>
            $(function(){
                $('#parsley-form').parsley()
            })
        </script>
    </body>

</html>