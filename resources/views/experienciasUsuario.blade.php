@extends('portada')

@section('contenido')
<main class="margen2">
    <h1>Nueva Experiencia</h1>
    @if (!empty($usuario))
        <form id="formulario" enctype="multipart/form-data">
            @csrf
            <label for="titulo">Título de la experiencia</label><br>
            <input type="text" name="titulo" id="titulo"><br><br>

            <label for="texto">Descripción de la experiencia</label><br>
            <textarea name="texto" id="texto" rows="10" cols="50" placeholder="Escriba su experiencia"></textarea><br><br>

            <label for="adjunto">Añadir archivos como videos o imágenes</label><br>
            <input type="file" name="adjunto" id="adjunto"><br><br>

            <input type="submit" value="Guardar Experiencia">
            <input type="hidden" name="borrador" value="1">
            <input type="hidden" id="usuario" value="{{ $usuario->id }}">
        </form>
</main>
    @else
        <p>Debes iniciar sesión para agregar una experiencia</p>
    @endif
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $("#formulario").submit(function(event) {
                event.preventDefault();
                var formData = new FormData($(this)[0]);
                let idUsuario = $("#usuario").val();
                $.ajax({
                    url: '/altaExperiencia/' + idUsuario,
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    enctype: 'multipart/form-data',
                    data: formData,
                    success: function(response) {
                        console.log(response);
                        window.location.href="/listadoExperiencias";
                    }
                });
            });
        });
    </script>
@endsection
