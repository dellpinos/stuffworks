@extends('layouts.home_layout')

@section('meta')
@endsection

@section('titulo')
    dellpinos
@endsection

@section('main-content')
    <p class="inicio__mensaje">{{ __('messages.welcome')}}</p>

    <div class="inicio">

        <div class="inicio__grid">
            <a href="{{ route('home.apps') }}" class="inicio__enlace">
                <img src="{{ asset('img/server.svg') }}" alt="Apps Online">
                <p>Apps Online</p>
            </a>
            <a href="{{ route('home.little_apps') }}" class="inicio__enlace">
                <img src="{{ asset('img/internet.svg') }}" alt="Little Apps">
                <p>Small Apps</p>
            </a>
            <a href="{{ route('scripts.index') }}" class="inicio__enlace">
                <img src="{{ asset('img/dev.svg') }}" alt="Scripts">
                <p>Challenges</p>
            </a>
            <a href="{{ route('home.focus_lotr') }}" class="inicio__enlace">
                <img src="{{ asset('img/ring_black.svg') }}" alt="Focus Ring">
                <p>Focus Ring</p>
            </a>
            {{-- <a href="{{ route('home.focus') }}" class="inicio__enlace">
                <img src="{{ asset('img/eye-monster.svg') }}" alt="Focus">
                <p>Focus Page</p>
            </a>
            <a href="{{ route('home.contact') }}" class="inicio__enlace">
                <img src="{{ asset('img/ufo.svg') }}" alt="Contact">
                <p>Contact</p>
            </a> --}}
        </div>
    </div>
@endsection
