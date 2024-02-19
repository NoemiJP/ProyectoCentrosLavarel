@extends('portada')
@section('contenido')
    <section class="seccionLogin">
        <div class="formulario formulario-registro">
            <div class="valores">
                <form method="POST"  action="/usuarios/registrar">
                    @csrf
                    <h2>Formulario de Registro</h2>
                    <div class="entrada">
                        <label for="nombre">Nombre</label><br>
                        <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre"><br><br>
                        @error('nombre')
                            <span style="color: red;">{{ $message }}</span><br>
                        @enderror
                    </div>

                    <div class="entrada">
                        <label for="apellidos">Apellidos</label><br>
                        <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus apellidos"><br><br>
                        @error('apellidos')
                            <span style="color: red;">{{ $message }}</span><br>
                        @enderror
                    </div>

                    <div class="entrada">
                        <label for="email">Correo eléctronico</label><br>
                        <input type="email" name="email" id="email" placeholder="Ingrese su nombre correo"><br><br>
                        @error('email')
                            <span style="color: red;">{{ $message }}</span><br>
                        @enderror
                    </div>

                    <div class="entrada">
                        <label for="usuario">Usuario</label><br>
                        <input type="text" name="usuario" id="usu"
                            placeholder="Ingrese el usuario que desee" /><br><br>
                        @error('usuario')
                            <span style="color: red;">{{ $message }}</span><br>
                        @enderror
                    </div>

                    <div class="entrada">
                        <label for="contrasena">Contraseña</label><br>
                        <input type="password" name="contrasena" id="pass" placeholder="Ingrese su contraseña"><br><br>
                        @error('contraseña')
                            <span style="color: red;">{{ $message }}</span><br>
                        @enderror
                    </div>

                    <div class="entrada">
                        <label for="centro">Centro</label>
                        <select name="centro" id="centro">
                            <option value="IBQ">IES Bernaldo de Quirós (IBQ)</option>
                            <option value="IBCF">IES Blas Cabrera Felipe (IBCF)</option>
                            <option value="IPCC">IES Pasqual Calbó i Caldés (IPCC)</option>
                            <option value="IPJB">IES Profesor Juan Bautista (IPJB)</option>
                            <option value="IMSIS">INS Manresa SIS (IMSIS) </option>
                        </select><br><br>
                        @error('centro')
                            <span style="color: red;">{{ $message }}</span><br>
                        @enderror
                    </div>

                    <input class="boton" type="submit" value="Registrarse">
                    <input type="hidden" name="rol" value="invitado">
                </form>
            </div>
        </div>
    </section>
@endsection
