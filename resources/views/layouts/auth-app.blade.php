<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('inc.head')
<body>
    @include('inc.nav')

           @yield('content')

    @include('inc.footer')


    @include('inc.javascript')
</body>
</html>

