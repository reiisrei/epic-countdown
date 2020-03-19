<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('inc.head')
<body>
    @include('inc.nav')
<div class="container" >
    @yield('content')
</div>


    @include('inc.footer')


    @include('inc.javascript')
</body>
</html>

