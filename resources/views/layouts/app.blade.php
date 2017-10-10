<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
        <title>{{config('app.name', 'Coffee Tracker')}}</title>
    </head>
    <body>
        @include('partials.navbar')
        <div class="content">
            @yield('content')
        </div>
    </body>
    <script>
        var userId = {{ $id }};
    </script>
</html>
