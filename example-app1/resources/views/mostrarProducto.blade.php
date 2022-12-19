<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php $tipo = $_REQUEST['tipo']?>

    @for($i = 0; $i < 100; $i++)
        <a href="{{url('/mostrar',['tipo' => $tipo, 'codigo' => $i])}}"><p>/producto/{{$tipo}}/{{$i}}</p></a>
    
    @endfor
</body>
</html>