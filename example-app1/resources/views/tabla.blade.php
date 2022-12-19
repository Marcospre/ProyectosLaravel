<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, th{
            border: 1px solid black;
            border-collapse:collapse;
        }
    </style>
</head>
<body>
    <?php $nombre = $_REQUEST['nombre']; $apellido = $_REQUEST['apellido']; ?>
    <table>
        <tr>
            <th>Nombre</th><td><?php echo $nombre?></td>
        </tr>
        <tr>
            <th>Apellido</th><td><?php echo $apellido?></td>
        </tr>
</body>
</html>