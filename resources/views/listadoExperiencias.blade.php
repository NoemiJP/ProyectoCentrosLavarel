@extends('portada')
@section('contenido')
    <main class="margen2">
        <h1>Experiencias Publicadas</h1>
        <div class="row justify-content-center">
            <!-- Itera sobre cada experiencia para mostrarla en una tarjeta -->
            @foreach ($experiencias as $experiencia)
                <div id="{{ $experiencia->centro }}" class="card col-9 align-self-center margen" style="width: 18rem;">
                   
                  <!-- Encabezado de la tarjeta-->
                    <h5 class="card-header">{{ $experiencia->titulo }}</h5>

                      <!-- Cuerpo de la tarjeta: texto de la experiencia, centro y usuario -->
                    <div class="card-body">
                        <p class="card-title">{{ $experiencia->texto }}</p>
                        <p class="card-text">Centro: {{ $experiencia->centro }}</p>
                        <p class="card-text">Usuario: {{ $experiencia->usuario }}</p>

                        <!-- Itera sobre la lista de archivos,si el ID de la experiencia
                                   coincide con el de los archivos, se muestra la imagen -->
                        @foreach ($archivos as $archivo)
                            @if ($archivo->experiencias_id == $experiencia->id)
                                <p class="card-text"><img
                                        src="data:image/jpg; base64, {{ base64_encode($archivo->archivo) }}"
                                        alt="img experiencia"></p>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
    </main>
    <script>
        $(document).ready(function() {
            // Cambiar el color de fondo de los elementos según su ID
            $("div[id*='IBQ']").css("background-color", "#D4EFDF");

            $("div[id*='IPCC']").css("background-color", "#F5B7B1");

            $("div[id*='IBCF']").css("background-color", "#D6EAF8");

            $("div[id*='IMSIS']").css("background-color", "#FDEBD0");

            $("div[id*='IPJB']").css("background-color", "#EBDEF0 ");


        });
    </script>
@endsection
