@extends('layouts.home_layout')

@section('meta')
@endsection

@section('titulo')
    Mdp
@endsection

@section('main-content')
    <div class="inicio">
        <div class="inicio__grid">
            <a href="{{ route('home.apps') }}" class="inicio__enlace">
                <img src="{{ asset('img/server.svg') }}" alt="eye">
                <p>Apps Online</p>
            </a>
            <a href="{{ route('home.little_apps') }}" class="inicio__enlace">
                <img src="{{ asset('img/internet.svg') }}" alt="eye">
                <p>Little Apps</p>
            </a>
            <a href="{{ route('scripts.index') }}" class="inicio__enlace">
                <img src="{{ asset('img/dev.svg') }}" alt="eye">
                <p>Challenges</p>
            </a>
            <a href="{{ route('home.focus') }}" class="inicio__enlace">
                <img src="{{ asset('img/eye-monster.svg') }}" alt="eye">
                <p>Focus Page</p>
            </a>
        </div>
    </div>
@endsection
