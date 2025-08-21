@extends('layouts.home_layout')

@section('meta')
@endsection

@section('titulo')
    Apps Online
@endsection

@section('main-content')

<div class="apps">

    <div class="apps__grid">
        <a class="apps__enlace" href="https://tuslistas.dellpinos.com" target="_blank">
            <h3>TusListas</h3>
            <img src="{{ asset('img/laravel.svg') }}" alt="Icono Laravel">
            <p>{{ __('apps.apps_tuslistas') }}</p>
            <ul>
                <li>>_ Laravel - PHP</li>
                <li>>_ MySQL</li>
                <li>>_ JavaScript</li>
                <li>>_ SASS</li>
                <li>>_ Vite</li>
            </ul>
        </a>
        <a class="apps__enlace" href="https://store.dellpinos.com" target="_blank">
            <h3>BakeryStore</h3>
            <img src="{{ asset('img/django.svg') }}" alt="Icono Django">
            <p>{{ __('apps.apps_bakerystore') }}</p>
            <ul>
                <li>>_ Django - Python</li>
                <li>>_ PostgresSQL</li>
                <li>>_ JavaScript</li>
                <li>>_ CSS</li>
            </ul>
        </a>
        <a class="apps__enlace" href="https://ticketadmin.dellpinos.com" target="_blank">
            <h3>TicketAdmin</h3>
            <img src="{{ asset('img/laravel.svg') }}" alt="Icono Laravel">
            <p>{{ __('apps.apps_ticketadmin') }}</p>
            <ul>
                <li>>_ Laravel - PHP</li>
                <li>>_ MySQL</li>
                <li>>_ JavaScript</li>
                <li>>_ MercadoPago API</li>
                <li>>_ Vite</li>
            </ul>
        </a>
        <a class="apps__enlace" href="https://task3track.dellpinos.com/" target="_blank">
            <h3>TaskTrack 3</h3>
            <img src="{{ asset('img/nodejs.svg') }}" alt="Icono NodeJs">
            <p>{{ __('apps.apps_tasktrack3') }}</p>
            <ul>
                <li>>_ Backend: Express - TypeScript</li>
                <li>>_ Frontend: React - TypeScript</li>
                <li>>_ MongoDB</li>
                <li>>_ TypeScript</li>
                <li>>_ Tailwind</li>
            </ul>
        </a>
        <a class="apps__enlace" href="https://net.dellpinos.com" target="_blank">
            <h3>Twack</h3>
            <img src="{{ asset('img/django.svg') }}" alt="Icono Django">
            <p>{{ __('apps.apps_social') }}</p>
            <ul>
                <li>>_ Django - Python</li>
                <li>>_ PostgresSQL</li>
                <li>>_ JavaScript</li>
                <li>>_ CSS</li>
            </ul>
        </a>
    </div>
</div>

@endsection