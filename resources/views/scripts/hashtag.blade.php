@extends('layouts.layout')

@section('meta')
@endsection

@section('titulo')
@endsection

@section('contenido')

<div class="contenido wordFlip">
    <h2>#Hashtag</h2>
    <div class="formularioWF">

        <fieldset>
            <legend>Convierto frases en hashtags, el resultado no puede superar los 140 caracteres <br><br>
                Ejemplo: <br>
                Input: "tenemos Un Problema"<br>
                Output: "#TenemosUnProblema"</legend>
            <div>
                <input type="text" placeholder="Texto" id="inputHashtag">
            </div>
            <div class="boton">
                <p style="cursor: pointer;" type="submit" id="botonFormularioHashtag">Enviar</p>
            </div>
            <div class="contenedorResultado">
                <p id="resultadoHashtag"></p>
            </div>
        </fieldset>
    </div>
</div>

@endsection