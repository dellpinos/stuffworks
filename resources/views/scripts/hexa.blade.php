@extends('layouts.scripts_layout')

@section('meta')
@endsection

@section('titulo')
    Challenge - Hexa
@endsection

@section('main-content')
    <div class="scripts__contenido">
        <h2 class="scripts__heading">Hexa</h2>
        <form class="formulario">
            <p class="formulario__description">Convierte colores RGB en Hexadecimal. Los números deben estar separados por una coma.</p>
            <div class="formulario__example">
                <p>Input: "255,10,111"</p>
                <p>Output: "FF0A6F"</p>
            </div>
            <div>
                <input type="" placeholder="Un color RGB" id="inputHexa">
            </div>
            <div class="formulario__boton-contenedor">
                <button id="botonFormularioHexa">Enviar</button>
            </div>
        </form>
        <div class="scripts__resultado-contenedor">
            <p class="scripts__resultado" id="resultadoHexa">Resultado</p>
        </div>
    </div>
@endsection
