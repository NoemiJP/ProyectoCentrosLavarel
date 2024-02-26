<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" type="text/css" href="/EcoHuerto/css/calendario.css">
    <link rel="icon" type="image/png" href="/EcoHuerto/img/logoEcoHuerto.png"/>
</head>
<body>
    <header>
        <h1>Brotes Verdes <br><span id="title"> IES Bernaldo de Quiros</span></h1>

    </header>

    <nav>
        <ul class="panel-navegacion">
            <li><a href="/"  id="inicio">Inicio</a></li>
            <li ><a href="/EcoHuerto/html/portada.html" id="portada">Portada</a></li>
            <li><a href="/EcoHuerto/html/actividades.html" id="actividades">Actividades</a></li>
            <li><a href="/EcoHuerto/html/agenda.html" id="agenda">Agenda</a></li>
            <li><a href="/EcoHuerto/html/galeria.html"  id="galeria">Galería</a></li>
            <li><a href="/calendario"  id="calendario">Calendario</a></li>
        </ul>

    </nav>
    <main>
        <h2>CALENDARIO DE SIEMBRA</h2>
        <table>
            <tr>
                <th rowspan="2">CULTIVO</th>
                <th class="siembra"></th>
                <th colspan="2">SIEMBRA DIRECTA</th>
                <th class="semillero"></th>
                <th colspan="2">SEMILLERO</th>
                <th class="transplante"></th>
                <th colspan="2">TRANSPLANTE</th>
                <th class="cosecha"></th>
                <th colspan="2">COSECHA</th>
            </tr>
            <tr>
                <th>E</th>
                <th>F</th>
                <th>M</th>
                <th>A</th>
                <th>M</th>
                <th>J</th>
                <th>JL</th>
                <th>A</th>
                <th>S</th>
                <th>O</th>
                <th>N</th>
                <th>D</th>
            </tr>
            @foreach($calendario as $elemento)
                <tr id="siembra{{$elemento->id}}">
                    <th rowspan="4">{{$elemento->nombre}}</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="semillero{{$elemento->id}}">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="transplante{{$elemento->id}}">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="cosecha{{$elemento->id}}">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <?php
                    echo "<script type='text/javascript'>";
                    if($elemento->siembra != ""){
                        $siembra = explode(";", $elemento->siembra);
                        for($i = 0; $i < count($siembra); $i++){
                            echo "document.getElementById('siembra$elemento->id').querySelectorAll('td')[$siembra[$i]].style.backgroundColor = 'red';";
                        }
                    }

                    if($elemento->semillero != ""){
                        $semillero = explode(";", $elemento->semillero);
                        for($i = 0; $i < count($semillero); $i++){
                            echo "document.getElementById('semillero$elemento->id').querySelectorAll('td')[$semillero[$i]].style.backgroundColor = 'green';";
                        }
                    }

                    if($elemento->transplante != ""){
                        $transplante = explode(";", $elemento->transplante);
                        for($i = 0; $i < count($transplante); $i++){
                            echo "document.getElementById('transplante$elemento->id').querySelectorAll('td')[$transplante[$i]].style.backgroundColor = 'blue';";
                        }
                    }

                    if($elemento->cosecha != ""){
                        $cosecha = explode(";", $elemento->cosecha);
                        for($i = 0; $i < count($cosecha); $i++){
                            echo "document.getElementById('cosecha$elemento->id').querySelectorAll('td')[$cosecha[$i]].style.backgroundColor = 'yellow';";
                        }
                    }

                    echo "</script>";
                ?>
            @endforeach
        </table>
    </main>
    <footer>
        <a href="https://ibq.es/"><img src="/EcoHuerto/img/logo-blanco.webp" id="logo"/></a>
        <a href="https://www.instagram.com/ecohuerto_ibq/"><img src="/EcoHuerto/img/logo-insta.png" id="instagram" href="https://www.instagram.com/ecohuerto_ibq/"/></a>


    </footer>
    <script>
        
    </script>
</body>
</html>