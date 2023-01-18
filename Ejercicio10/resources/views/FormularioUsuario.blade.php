<form action="/registrarFormu" method="POST">
    @csrf
    <table>
        <tr><td><label>Nombre:</label></td></tr>
        <tr><td><input name="nombre" type="text"></td></tr>
        <tr><td><label>Apellido:</label></td></tr>
        <tr><td><input name="apellido" type="text"></td></tr>
        <tr><td><label>DNI:</label></td></tr>
        <tr><td><input name="dni" type="text"></td><td><div id="alerts"></div></td></tr>
        @error('dni')
            {{-- {{alertError($message)}} --}}
            <tr><td><div class="alert alert-danger" style="color: red">{{$message}}</div></td></tr>
        @enderror
        <tr><td><label>email:</label></td></tr>
        <tr><td><input name="email" type="text"></td><td><div id="alerts"></div></td></tr>
        @error('email')
            {{-- {{alertError($message)}} --}}
            <tr><td><div class="alert alert-danger" style="color: red">{{$message}}</div></td></tr>
        @enderror
        <tr><td><label>Fecha:</label></td></tr>
        <tr><td><input name="fecha" type="date"></td></tr>
        <tr><td><label>Codigo seguridad:</label></td></tr>
        <tr><td><input name="codigo" type="text"></td></tr>
        @error('codigo')
            {{-- {{alertError($message)}} --}}
            <tr><td><div class="alert alert-danger" style="color: red">{{$message}}</div></td></tr>
        @enderror

        <tr><td><input type="submit" value="Mostrar"></td></tr>
    </table>
</form>