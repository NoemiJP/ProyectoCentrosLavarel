@extends('portada')

@section('contenido')
    <main class="margen2">
        <h1>Nueva Experiencia</h1>

        <!-- Comprueba si hay un usuario logueado -->
        @if (!empty($usuario))
            <!-- Formulario para agregar una nueva experiencia -->
            <form id="formulario" enctype="multipart/form-data">
                @csrf
                <label for="titulo">Título de la experiencia</label><br>
                <input type="text" name="titulo" id="titulo"><br><br>

                <label for="texto">Descripción de la experiencia</label><br>
                <textarea name="texto" id="texto" rows="10" cols="50" placeholder="Escriba su experiencia"></textarea><br><br>

                <label for="adjunto">Añadir imagen</label><br>
                <input type="file" name="adjunto" id="adjunto"><br><br>


                <input type="submit" value="Guardar Experiencia">

                <!-- Campo oculto para indicar que la experiencia es un borrador -->
                <input type="hidden" name="borrador" value="1">
                <!-- Campo oculto para almacenar el ID para luego recogerlo en la petición AJAX -->
                <input type="hidden" id="usuario" value="{{ $usuario->id }}">
            </form>
    </main>
    <!-- Si no hay un usuario logueado, muestra un mensaje de advertencia -->
@else
    <p>Debes iniciar sesión para agregar una experiencia</p>
    @endif


    <!-- Script JavaScript para manejar el envío del formulario a través de AJAX -->
    <script>
        $(document).ready(function() {
            //Incluye CSRF en las solicitudes
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $("#formulario").submit(function(event) {
                event.preventDefault();

                // Creación de un objeto FormData con los datos del formulario
                var formData = new FormData($(this)[0]);
                let idUsuario = $("#usuario").val();

                // Envío de la solicitud AJAX para guardar la experiencia
                $.ajax({
                    url: '/altaExperiencia/' + idUsuario, //Ruta que guarda la experiencia
                    type: 'POST', //Método
                    processData: false,
                    contentType: false,
                    enctype: 'multipart/form-data', // Tipo de codificación de datos
                    data: formData, //Datos del formulario
                    success: function(response) { //Respuesta con éxito
                        console.log(response);
                        window.location.href = "/experienciasUsuario/" + idUsuario;
                    },
                    error: function(err) { //Respuesta que muestra si hay error
                        console.log(err);
                    }
                });
            });
        });
    </script>
@endsection
