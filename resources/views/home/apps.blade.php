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
                <li>>_ Laravel</li>
                <li>>_ MySQL</li>
                <li>>_ JavaScript</li>
                <li>>_ SASS</li>
                <li>>_ Vite</li>
            </ul>
        </a>
        <a class="apps__enlace" href="https://ticketadmin.dellpinos.com" target="_blank">
            <h3>TicketAdmin</h3>
            <img src="{{ asset('img/laravel.svg') }}" alt="Icono Laravel">
            <p>{{ __('apps.apps_ticketadmin') }}</p>
            <ul>
                <li>>_ Laravel</li>
                <li>>_ MySQL</li>
                <li>>_ JavaScript</li>
                <li>>_ MercadoPago API</li>
                <li>>_ Vite</li>
            </ul>
        </a>
        <a class="apps__enlace" href="https://mercadofreedom.dellpinos.com" target="_blank">
            <h3>MercadoFreedom</h3>
            <img src="{{ asset('img/codeigniter.svg') }}" alt="Icono Codeigniter">
            <p>{{ __('apps.apps_mercadofreedom') }}</p>
            <ul>
                <li>>_ CodeIgniter / PHP</li>
                <li>>_ MySQL</li>
                <li>>_ JavaScript</li>
                <li>>_ CSS</li>
            </ul>
        </a>
    </div>
</div>

@endsection