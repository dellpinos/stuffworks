@extends('layouts.scripts_layout')

@section('meta')
@endsection

@section('titulo')
    Challenge - Cuadrícula
@endsection

@section('main-content')
    <div class="scripts__contenido">
        <h2 class="scripts__heading">Cuadrícula</h2>
        <form class="formulario">
            <p class="formulario__description">Genera una cuadricula</p>
            <div class="formulario__example">
                <p>Input: "4" - "6"</p>
                <p>Output: Una Cuadrícula</p>
            </div>
            <div class="formulario__campos">
                <input type="number" min="1" max="10" placeholder="Alto" id="inputCuadriculaAlto">
                <input type="number" min="1" max="10" placeholder="Ancho" id="inputCuadriculaAncho">
            </div>
            <div class="formulario__boton-contenedor">
                <button id="botonFormularioCuadricula">Enviar</button>
            </div>
        </form>
        <div class="scripts__resultado-contenedor">
            <p class="scripts__resultado" id="resultadoCuadricula">Resultado</p>
        </div>
    </div>
@endsection
