@extends('layouts.layout')

@section('meta')
@endsection

@section('titulo')
@endsection

@section('contenido')

<div class="contenido wordFlip">
    <h2>toCamel</h2>
    <form class="formularioWF">

        <fieldset>
            <legend>Convierto cualquier texto en camelCase. <br><br>
                Ejemplo: <br>
                Input: "Este ES-UN_eJempLO de texto"<br>
                Output: "esteEsUnEjemploDeTexto"</legend>
            <div>
                <input type="text" placeholder="Voy a escribir algo inútil" id="inputWordFlip">
            </div>
            <div class="boton">
                <p style="cursor: pointer;" type="submit" id="botonFormularioToCamel">Enviar</p>
            </div>
            <div class="contenedorResultado">
                <p id="resultadoWF"></p>
            </div>
        </fieldset>
    </form>
</div>


@endsection