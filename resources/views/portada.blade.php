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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<header class="encabezado">
    <section>
        <h1>AGUA, VIDA Y BIENESTAR</h1>
        <h2>AGRUPACIÓN DE CENTROS ESCOLARES 2023</h2>
    </section>
</header>


<body>
    <nav class="menu">
        <a class="active" href="/">Inicio</a>
        <a class="inactive" href="{{ asset('EcoHuerto/html/portada.html') }}">EcoHuerto</a>
        <a class="inactive" href="/ibcf">IBCF</a>
        <a class="inactive" href="/ipcc">IPCC</a>
        <a class="inactive" href="/ipjb">IPJB</a>
        <a class="inactive" href="/imsis">IMSIS</a>
        @if (!empty($usuario) && $usuario->rol == 'admin')
        <a class="inactive" href="/experienciasAdmin">Experiencias</a>
        <a class="inactive">Hola {{$usuario->usuario}}</a>
        <a class="inactive" href="/logout">Cerrar Sesión</a>
        @elseif (!empty($usuario) && $usuario->rol == 'invitado')
        <a class="inactive" href="/experienciasUsuario/{{$usuario->id}}">Experiencias</a>
        <a class="inactive">Hola {{$usuario->usuario}}</a>
        <a class="inactive" href="/logout">Cerrar Sesión</a>
        @else 
        <a class="inactive" href="/experienciasUsuario">Experiencias</a>
        <a class="inactive" href="/usuarios">Iniciar Sesión</a>
        <a class="inactive" href="/registro">Registrarse</a>
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
