<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('inc.head')
<body>
    @include('inc.nav')

           @yield('content')
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    @include('inc.footer')


    @include('inc.javascript')
</body>
</html>

