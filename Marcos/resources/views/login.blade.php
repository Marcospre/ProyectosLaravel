<form action="{{url('logearUsuario')}}" method="POST">
    @csrf
    <table>
        <tr><td><label for="">Nombre:</label></td></tr>
        <tr><td><input type="text" name="name"></td></tr>
        <tr><td><label for="">Contraseña:</label></td></tr>
        <tr><td><input type="password" name="contrasena"></td></tr>
        <tr><td><input type="submit" value="Logear"></td></tr>
    </table>
</form>