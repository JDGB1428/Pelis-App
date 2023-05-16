<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel - @yield('title')</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <header class="header">
            <a href="" class="logo">Logo</a>

            <nav class="navbar">
                <a href="{{route('registrar')}}" >Registrate</a>
                <a href="{{route('iniciar-sesion')}}">Iniciar sesion</a>
            </nav>
        </header>
        <section class="home">
            @yield('home')
        </section>
        <section class="promo">@yield('promo')</section>
        <section class="question">@yield('question')</section>
        <footer class="footer">
            <p>Hecho por Juan David Galindo - Todos los derechos reservados &copy;{{now()->year}}</p>
        </footer>
    </body>
</html>
