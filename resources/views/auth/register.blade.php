@extends('layouts.app')

@section('titulo')
    Regístrate en Colombia Aprende
@endsection

@section('contenido')
    <form action="{{ route('register') }}" method="POST" autocomplete="off" novalidate>
        @csrf
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" placeholder="Nombre completo" value="{{ old('name') }}">
        @error('name')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <label for="username">Usuario</label>
        <input type="text" name="username" id="username" placeholder="Usuario" value="{{ old('username') }}">
        @error('username')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <label for="email">Correo electrónico</label>
        <input type="email" name="email" id="email" placeholder="Correo electrónico" value="{{ old('email') }}">
        @error('email')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <label for="date_birth">Fecha de nacimiento</label>
        <input type="date" name="date_birth" id="date_birth">
        @error('date_birth')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" placeholder="Contraseña">
        @error('password')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <label for="password_confirmation">Repite la contraseña</label>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repite la contraseña">
        <br>
        @error('password_confirmation')
            <p>{{ $message }}</p>
        @enderror
        <input type="submit" value="Crear cuenta">
        <br>
    </form>
@endsection