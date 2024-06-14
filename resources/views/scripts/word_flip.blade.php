@extends('layouts.layout')

@section('meta')
@endsection

@section('titulo')
@endsection

@section('contenido')

<div class="contenido wordFlip">
    <h2>WordFlip!</h2>
    <form class="formularioWF">

        <fieldset>
            <legend>Dame algunas palabras, voy a escoger algunas al azar e invertir el orden de sus letras. Esto
                hace que las palabras sean ilegibles y completamente inútiles. <br> <br>
                Cada vez que se presiona el botón, se genera un nuevo resultado.</legend>
            <div>
                <input type="text" placeholder="Voy a escribir algo inútil" id="inputWordFlip">
            </div>
            <div class="boton">
                <p style="cursor: pointer;" type="submit" id="botonFormularioWordFlip">Enviar</p>
            </div>
            <div class="contenedorResultado">
                <p id="resultadoWF"></p>
            </div>
        </fieldset>
    </form>
</div>



@endsection