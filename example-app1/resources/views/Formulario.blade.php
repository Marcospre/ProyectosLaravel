<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/mostrardatosTabla" method="POST">
        @csrf
        <label>Nombre:</label>
        <input name="nombre" type="text">
        <label>Apellido:</label>
        <input name="apellido" type="text">
        <input type="submit" value="Mostrar">
    </form>
</body>
</html>