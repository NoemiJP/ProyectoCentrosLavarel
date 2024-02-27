@extends('portada')
@section('contenido')
    <section class="seccionLogin">
        <div class="formulario">
            <div class="valores">
                 <!-- Formulario para inicio de sesión -->
                <form method="POST" action="/usuarios/login">
                    @csrf
                    <h2>Iniciar sesión</h2>
                    <div class="entrada">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" name="usuario" required placeholder="Usuario">
                    </div>
                    <div class="entrada">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="contrasena" required placeholder="Contraseña">
                    </div>

                    <button class="boton" type="submit">Iniciar Sesión</button>


                </form>
            </div>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </section>
@endsection
