<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portada</title>
    <link rel="stylesheet" href="{{ asset('css/web.css') }}" />
    <script src="{{ asset('js/web.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<header class="encabezado">
    <section>
        <h1>AGUA, VIDA Y BIENESTAR</h1>
        <h2>AGRUPACIÓN DE CENTROS ESCOLARES 2023</h2>
    </section>
</header>


<body>
    <nav class="menu">
        <a class="active encima" href="/">Inicio</a>
        <a class="inactive encima" href="{{ asset('EcoHuerto/html/portada.html') }}">EcoHuerto</a>

        @if (!empty($usuario) && $usuario->rol == 'admin')
        <a class="inactive encima" href="/ibcf/{{ $usuario->id }}">IBCF</a>
        <a class="inactive encima" href="/ipcc/{{ $usuario->id }}">IPCC</a>
        <a class="inactive encima" href="/ipjb/{{ $usuario->id }}">IPJB</a>
        <a class="inactive encima" href="/imsis/{{ $usuario->id }}">IMSIS</a>
        <div class="dropdown">
            <button class="btnMenu dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Experiencias
            </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="/experienciasAdmin/{{$usuario->id}}">Validar Experiencias</a>
            <a class="dropdown-item" href="/experienciasUsuario/{{$usuario->id}}">Listado de Experiencias</a>
            <a class="dropdown-item" href="/crearExperiencias/{{$usuario->id}}">Nueva Experiencia</a>
        </div>
    </div>
            <div class="dropdown">
                <button class="btnMenu dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Hola {{ $usuario->usuario }}
                </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="/cambiarContraseña/{{ $usuario->id }}">Cambiar Contraseña</a>
                <a class="dropdown-item" href="/logout">Cerrar Sesión</a>
            </div>
            </div>
        @elseif (!empty($usuario) && $usuario->rol == 'invitado')
        <a class="inactive encima" href="/ibcf/{{ $usuario->id }}">IBCF</a>
        <a class="inactive encima" href="/ipcc/{{ $usuario->id }}">IPCC</a>
        <a class="inactive encima" href="/ipjb/{{ $usuario->id }}">IPJB</a>
        <a class="inactive encima" href="/imsis/{{ $usuario->id }}">IMSIS</a>
        <div class="dropdown">
            <button class="btnMenu dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Experiencias
            </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="/experienciasUsuario/{{$usuario->id}}">Listado de Experiencias</a>
            <a class="dropdown-item" href="/crearExperiencias/{{$usuario->id}}">Nueva Experiencia</a>
        </div>
    </div>
            <div class="dropdown">
                <button class="btnMenu dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Hola {{ $usuario->usuario }}
                </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="/cambiarContraseña/{{ $usuario->id }}">Cambiar Contraseña</a>
                <a class="dropdown-item" href="/logout">Cerrar Sesión</a>
            </div>
            </div>
        @else
        <a class="inactive encima" href="/ibcf">IBCF</a>
        <a class="inactive encima" href="/ipcc">IPCC</a>
        <a class="inactive encima" href="/ipjb">IPJB</a>
        <a class="inactive encima" href="/imsis">IMSIS</a>
            <a class="inactive encima" href="/experienciasUsuario">Experiencias</a>
            <div class="dropdown">
                <button class="btnMenu dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Área Personal
                </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="/usuarios">Iniciar Sesión</a>
                <a class="dropdown-item" href="/registro">Registrarse</a>
            </div>
        </div>
        @endif

    </nav>
    <section class="contenido">
        @yield('contenido')
    </section>
    
    <footer>
        <a href="https://ibq.es/" target="_blank"><img id="ibq" src="../css/img/logoIBQ.webp" /></a>
        <a href="https://www.instagram.com/ecohuerto_ibq/" target="_blank"><img id="insta"
                src="../../css/img/logoInstagram.png" /></a>
    </footer>
</body>

</html>
