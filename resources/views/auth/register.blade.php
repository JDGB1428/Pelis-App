@extends('components.layouts.form-app')

@section('title')
    Registrarte en Pelis-App
@endsection

@section('content')
    <div class="form-box">
        <h1>@yield('title')</h1>
        <form action="{{route('registrar')}}" method="POST">
            @csrf
            <div class="box-username">
                <input type="text" placeholder="Tu Nombre" name="name" id="name">
                @error('name')
                    <p>{{$message}}</p>
                @enderror
            </div>
            <div class="box-username">
                <input type="text" placeholder="Nombre de usuario"name="username" id="username">
            </div>
            <div class="box-correo">
                <input type="text" placeholder="Tu correo" name="email" id="email">
            </div>
            <div class="box-contraseña">
                <input type="password" placeholder="Contraseña" name="password" id="password">
            </div>
            <div class="box-comcontraseña">
                <input type="password" placeholder="Comfirmar contraseña"name="conpassword" id="conpassword">
            </div>
            <div class="box-registrar">
                <button type="submit">Registrar</button>
            </div>
        </form>
    </div>
    <div class="gradient"></div>
@endsection
