@extends('layouts.layout')

@section('meta')
@endsection

@section('titulo')
@endsection

@section('contenido')

<div class="contenido wordFlip">
    <h2>Like</h2>
    <form class="formularioWF">

        <fieldset>
            <legend>Pongo "likes" <br><br>
                Ejemplo: <br>
                Input: "Alex, Jacob, Mark, Max"<br> 
                Output: "Alex, Jacob and 2 others like this"</legend>
            <div>
                <input type="text" placeholder="Nombres" id="inputLikes">
            </div>
            <div class="boton">
                <p style="cursor: pointer;" type="submit" id="botonFormularioLikes">Enviar</p>
            </div>
            <div class="contenedorResultado">
                <p id="resultadoLikes"></p>
            </div>
        </fieldset>
    </form>
</div>


@endsection