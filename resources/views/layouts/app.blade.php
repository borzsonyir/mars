<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <!-- indicate mobile friendly page-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- change status bar color on supported mobile browsers -->
    <meta name="theme-color" content="#252A51">
    <!-- change the page's icon in the browser's tab -->
    <link rel="icon" href="{{ config('app.logo_with_bg_path') }}">
    <!-- CSRF Token for Laravel's forms -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Urán') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}" media="screen,projection" >
    <link type="text/css" rel="stylesheet" href="{{ mix('css/materialize.css') }}" media="screen,projection" />

    <!-- Scripts -->
    <script type="text/javascript" src="{{ mix('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/tabulator.min.js') }}" defer></script>
    <script type="text/javascript" src="{{ mix('js/cookieconsent.min.js') }}" defer></script>
    <script type="text/javascript" src="{{ mix('js/cookieconsent-initialize.js') }}" defer></script>
    <script type="text/javascript" src="{{ mix('js/materialize.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/site.js') }}"></script>
    <script>
        $(document).ready(
            function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                });
                $('.sidenav').sidenav();
                $('.collapsible').collapsible();
            }
        );
    </script>

</head>

<body>
    <header>
        @include('layouts.navbar')
    </header>
    <div class="row">
        <div class="container">
            <div class="col s12 m12 l11 offset-xl2 offset-l3">
                @yield('content')
            </div>
        </div>
    </div>
    @include('utils.toast')
    <script>
    var cookieMessages = {
        'dismiss': "@lang('cookie.dismiss')",
        'allow': "@lang('cookie.allow')",
        'deny': "@lang('cookie.deny')",
        'link': "@lang('cookie.link')",
        'cookie': "@lang('cookie.message')",
        'header': "@lang('cookie.header')",
    };
    </script>
</body>

</html>