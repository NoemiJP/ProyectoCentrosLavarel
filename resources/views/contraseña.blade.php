
    @extends('portada')
    @section('contenido')
     <!--<form method="POST" style="margin-top:3%;height: 27vh;margin-left:40%;" action="/usuarios/login">
        @csrf
        <label for="usuario">Usuario</label><br>
        <input type="text" name="usuario" id="usu" /><br><br>
        <label for="contrasena">Contraseña</label><br>
        <input type="password" name="contrasena" id="pass" /><br><br>
        <input type="submit" value="Login">
    </form>-->
    <section class="seccionLogin">
        <div class="formulario">
            <div class="valores"> 
                <form  method="POST" action="/actualizarContraseña/{{$usuario->id}}">
                    @csrf
                    <h2>Cambiar Contraseña</h2>
                    <div class="entrada">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="password" name="contrasena" required placeholder="Contraseña">
                    </div>
                    <div class="entrada">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="contrasena2" required placeholder="Repita su contraseña">
                    </div>
                    <!--  <div class="recordar">
                        <label for="recordar"><input type="checkbox">Recordar</label>
                        <a href="#">Olvidé mi contraseña</a>
                    </div> -->
                   
                    <button class="boton" type="submit">Actualizar Contraseña</button>
                    <!--  <div class="registro">
                        <p>No tengo una cuenta <a href="#">Registrarse</a></p>
                    </div> -->
                   
                </form>
            </div>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </section>
    @endsection