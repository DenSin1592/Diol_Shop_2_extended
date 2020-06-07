<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.includes.head')
    </head>
    <body>
        @include('layouts.includes.header')
        <div class="content-container">
            @yield('content')
        </div>
        @include('layouts.includes.footer')
        @include('layouts.includes.js')
    </body>
</html>
