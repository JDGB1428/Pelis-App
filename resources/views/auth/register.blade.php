@extends('components.layouts.form-app')

@section('title')
    Registrarte en Pelis-App
@endsection

@section('content')
    <div class="form-box">
        <h1>@yield('title')</h1>
        <form action="{{route('registrar')}}" method="POST" novalidate>
            @csrf
            <div class="box-username">
                <input type="text" placeholder="Tu Nombre" name="name" id="name" value="{{ old('name') }}">
                @error('name')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>
            <div class="box-username">
                <input type="text" placeholder="Nombre de usuario"name="username" id="username" value="{{ old('username') }}">
                @error('username')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>
            <div class="box-correo">
                <input type="email" placeholder="Tu correo" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>
            <div class="box-contraseña">
                <input type="password" placeholder="Contraseña" name="password" id="password">
                @error('password')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>
            <div class="box-comcontraseña">
                <input type="password" placeholder="Comfirmar contraseña"
                        name="password_confirmation" id="password_confirmation">
            </div>
            <div class="box-registrar">
                <button type="submit">Registrar</button>
            </div>
        </form>
    </div>
    <div class="gradient"></div>
@endsection
