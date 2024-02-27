@extends('portada')
@section('contenido')
    <main class="margen2 ancho">
        <h1 class="tituloPag">Experiencias Administrador</h1>
        <div class="row justify-content-center">

            <!-- Itera sobre cada experiencia para mostrarla en una tarjeta -->
            @foreach ($experiencias as $experiencia)
                <div class="card col-12 align-self-center margen" style="width: 18rem;">
                    <h5 class="card-header">{{ $experiencia->titulo }}</h5>
                    <div class="card-body">
                        <p class="card-title">{{ $experiencia->texto }}</p>
                        <p class="card-text">{{ $experiencia->centro }}</p>
                        @foreach ($archivos as $archivo)
                            @if ($archivo->experiencias_id == $experiencia->id)
                                <p class="card-text"><img
                                        src="data:image/jpg; base64, {{ base64_encode($archivo->archivo) }}"
                                        alt="img experiencia"></p>
                            @endif

            <!-- Botón para validar la experiencia, redirige a la ruta /validar con los IDs-->
                        @endforeach
                        <a href="/validar/{{ $experiencia->id }}/{{ $usuario->id }}"
                            class="btn btn-success float-right">Validar Experiencia</a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
