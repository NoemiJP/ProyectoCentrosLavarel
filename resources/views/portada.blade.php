<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portada</title>
    <link rel="stylesheet" href="{{ asset('css/web.css') }}" />
    <script src="{{ asset('js/web.js') }}"></script>
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
        @if (!empty($usuario))
        <a class="inactive" href="/experienciasAdmin">Experiencias</a>
        <a class="inactive">Hola {{$usuario->usuario}}</a>
        <a class="inactive" href="/logout">Cerrar Sesión</a>
        @else 
        <a class="inactive" href="/experienciasUsuario">Experiencias</a>
        <a class="inactive" href="/usuarios">Iniciar Sesión</a>
        <a class="inactive" href="/registro">Registrarse</a>
        @endif
        <!--?php
        session_start(); //Inicio sesión

        //Se verifica si existe "usuario" en sesión
        if (isset($_SESSION["usuario"])) {
            $usuarioLogueado = $_SESSION["usuario"]; //Si existe, crea el usuario logueado
        } else {
            $usuarioLogueado = "Invitado"; //Sino se da valor de usuario invitado
        }

        //Si el usuario es invitado muestra un enlace para cerrar sesión sino mensaje de saludo
        if ($usuarioLogueado == "Invitado") {
            echo "<a class=\"inactive\" href=\"/views/login.php\">Iniciar Sesión</a>";
        } else {
            echo "<a class=\"inactive\">Hola " . $usuarioLogueado . "</a>";
        }

        //Usuario no invitado, muestra enlace de cerrar sesión
        if ($usuarioLogueado != "Invitado") {
            echo "<a class=\"inactive\" href=\"/views/logout.php\">Cerrar Sesión</a>";
        }
        ?-->
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
