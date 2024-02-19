@extends('portada')
@section('contenido')
<h1>Experiencias Publicadas</h1>
<div class="row justify-content-center">
    @foreach ($experiencias as $experiencia)
    <div id="{{$experiencia->centro}}" class="card col-6 align-self-center margen" style="width: 18rem;">
        <h5 class="card-header">{{$experiencia->titulo}}</h5>
        <div class="card-body">
          <p class="card-title">{{$experiencia->texto}}</p>
          <p class="card-text">{{$experiencia->centro}}</p>
          @foreach ($archivos as $archivo)
            @if ($archivo->experiencias_id == $experiencia->id)
            <p class="card-text"><img src="data:image/jpg; base64, {{ base64_encode($archivo->archivo)}}" alt="img experiencia"></p>
            @endif
          @endforeach
        </div>
      </div>
    @endforeach
    <script>
        $(document).ready(function(){
$("div[id*='IBQ']").css( "background-color", "#027050");

$("div[id*='IPCC']").css( "background-color", "red");

$("div[id*='IBCF']").css( "background-color", "blue");

$("div[id*='IMSIS']").css( "background-color", "orange");

$("div[id*='IPJB']").css( "background-color", "grey");


        });
    </script>
@endsection