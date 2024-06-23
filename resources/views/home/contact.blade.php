@extends('layouts.home_layout')

@section('meta')
@endsection

@section('titulo')
    Contact
@endsection

@section('main-content')

<div class="contact">

    <h1>Enlaces de Contacto</h1>

    <div class="contact__grid">
        <a href="https://www.linkedin.com/in/martin-del-pino/" target="blank">
            <img src="{{ asset('img/linkedin.svg')}}" alt="Icono Linkedin">
            <p>LinkedIn</p>
        </a>
        <a href="http://dellpinos.com" target="_blank">
            <img src="{{ asset('img/avatar.svg')}}" alt="Icono avatar">
            <p>Portfolio</p>
        </a>
        <a href="https://github.com/dellpinos" target="blank">
            <img src="{{ asset('img/github.svg')}}" alt="Icono Github">
            <p>GitHub</p>
        </a>
        <a href="https://www.codewars.com/users/dellpinos" target="blank">
            <img src="{{ asset('img/codewars.svg')}}" alt="Icono Codewars">
            <p>CodeWars</p>
        </a>
    </div>


</div>


@endsection