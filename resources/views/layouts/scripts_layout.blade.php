@extends('layouts.layout')


@section('contenido')
    <div class="contenedor contenedor__grid">
        <main>
            @yield('main-content')
        </main>

        <sidebar class="sidebar">
            <div class="sidebar__entrada @if (request()->routeIs('scripts.index')) sidebar__entrada--activo @endif">
                <a href="{{ route('scripts.index') }}">Index</a>
            </div>
            <div class="sidebar__entrada @if (request()->routeIs('scripts.word_flip')) sidebar__entrada--activo @endif">
                <a href="{{ route('scripts.word_flip') }}">WordFlip</a>
            </div>
            <div class="sidebar__entrada @if (request()->routeIs('scripts.to_camel')) sidebar__entrada--activo @endif">
                <a href="{{ route('scripts.to_camel') }}">camelCase</a>
            </div>
            <div class="sidebar__entrada @if (request()->routeIs('scripts.cuadricula')) sidebar__entrada--activo @endif">
                <a href="{{ route('scripts.cuadricula') }}">Cuadricula</a>
            </div>
            <div class="sidebar__entrada @if (request()->routeIs('scripts.hashtag')) sidebar__entrada--activo @endif">
                <a href="{{ route('scripts.hashtag') }}">#Hashtag</a>
            </div>
            <div class="sidebar__entrada @if (request()->routeIs('scripts.hexa')) sidebar__entrada--activo @endif">
                <a href="{{ route('scripts.hexa') }}">Hexa</a>
            </div>
            <div class="sidebar__entrada @if (request()->routeIs('scripts.likes')) sidebar__entrada--activo @endif">
                <a href="{{ route('scripts.likes') }}">Likes</a>
            </div>

        </sidebar>
    </div>
@endsection
