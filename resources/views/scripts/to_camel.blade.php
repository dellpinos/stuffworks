@extends('layouts.scripts_layout')

@section('meta')
@endsection

@section('titulo')
    Challenge - camelCase
@endsection

@section('main-content')
    <div class="scripts__contenido">
        <h2 class="scripts__heading">camelCase</h2>
        <form class="formulario" id="formularioToCamel">
            <p class="formulario__description">Convierte cualquier texto en camelCase.</p>
            <div class="formulario__example">
                <p>Input: "Este ES-UN_eJempLO de texto"</p>
                <p>Output: "esteEsUnEjemploDeTexto"</p>
            </div>
            <div>
                <input type="text" placeholder="Escribe cualquier texto" id="inputToCamel">
            </div>
            <div class="formulario__boton-contenedor">
                <button id="botonFormularioToCamel">Enviar</button>
            </div>
        </form>
        <div class="scripts__resultado-contenedor">
            <p class="scripts__resultado" id="resultadoToCamel">Resultado</p>
        </div>
    </div>
@endsection
