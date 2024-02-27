
    @extends('portada')
    @section('contenido')
     
     <!-- Formulario para cambiar la contraseña -->
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
                    
                   
                    <button class="boton" type="submit">Actualizar Contraseña</button>
                  
                   
                </form>
            </div>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </section>
    @endsection