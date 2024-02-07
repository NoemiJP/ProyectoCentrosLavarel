@extends('portada')
@section('contenido')
    <form method="POST" style="margin-top:3%;height: 27vh;margin-left:40%;" action="/usuarios/registrar">
        @csrf
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" id="nombre"><br><br>
        <label for="apellidos">Apellidos</label><br>
        <input type="text" name="apellidos" id="apellidos"><br><br>
        <label for="email">Correo eléctronico</label><br>
        <input type="email" name="email" id="email"><br><br>
        <label for="usuario">Usuario</label><br>
        <input type="text" name="usuario" id="usu" /><br><br>
        <label for="contrasena">Contraseña</label><br>
        <input type="password" name="contrasena" id="pass" /><br><br>
        <select name="centro">
            <option value="IES Blas Cabrera Felipe">IES Blas Cabrera Felipe</option>
        </select><br><br>
        <input type="submit" value="Registrarse">
        <input type="hidden" name="rol" value="invitado">
    </form>
@endsection
