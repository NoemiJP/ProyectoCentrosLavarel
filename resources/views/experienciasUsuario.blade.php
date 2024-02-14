@extends('portada')
@section('contenido')
    <h1>Experiencias</h1>
    <form action="/altaExperiencia" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="titulo">Título de la experiencia</label><br>
        <input type="text" name="titulo" id="titulo"><br><br>
        <label for="texto">Descripción de la experiencia</label><br>
        <textarea name="texto" id="texto" rows="10" cols="50" placeholder="Escriba su experiencia"></textarea><br><br>
        <label for="adjunto">Añadir archivos como videos o imágenes</label><br>
        <input type="file" name="adjunto" id="adjunto"><br><br>
        <input type="submit" value="Guardar Experiencia">
        <input type="hidden" name="borrador" value="1">
    </form>
@endsection
