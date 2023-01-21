<form action="{{url('registrarUsuario')}}" method="POST">
    @csrf
    <table>
        <tr><td><label for="">Nombre:</label></td></tr>
        <tr><td><input type="text" name="name"></td></tr>
        @error('name')
            <tr><td><div style="color:red">{{$message}}</div></td></tr>
        @enderror
        <tr><td><label for="">Email:</label></td></tr>
        <tr><td><input type="email" name="email"></td></tr>
        @error('email')
            <tr><td><div style="color:red">{{$message}}</div></td></tr>
        @enderror
        <tr><td><label for="">Contraseña:</label></td></tr>
        <tr><td><input type="password" name="contrasena"></td></tr>
        @error('contrasena')
            <tr><td><div style="color:red">{{$message}}</div></td></tr>
        @enderror
        <tr><td><input type="submit" value="Registrar"></td></tr>
    </table>
</form>