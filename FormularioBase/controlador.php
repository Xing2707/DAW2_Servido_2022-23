<?php
    //autoloa avanzado
    spl_autoload_register(function($class){
        $classPath=realpath("./");
        $file=str_replace('\\','/',$class);
        require("$classPath/${file}.php");

    });

    $nombre=new Simple\Texto("Nombre","IntroduceNombre",3,15,5,"nombre","/[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?)*/");
    $texto=new Simple\Texto("Texto","Introduce texo",4,15,5,"texto","/[a-zA-ZÀ-ÖØ-öø-ÿ]*/");
    $telefo=new Simple\Texto("Telefono","Introduce telefono",9,9,7,"telefno","0{0,2}([\+]?[\d]{1,3} ?)?([\(]([\d]{2,3})[)] ?)?[0-9][0-9 \-]{6,}( ?([xX]|([eE]xt[\.]?)) ?([\d]{1,5}))?");
    $correo=new Simple\Texto("Correro","Introduce correo",30,319,9,"correo","/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/");
    $edad=new Simple\Numero("Edad",18,64);
    $sexo=new Multiple\Radio("Sexo",["Hombre","Mujer"]);
    $hobbys=new Multiple\Checkbox("hobbys",["Lectura","Cine","Juego","Deporte"]);
    $select = new Multiple\Select("Provincia",[" ","MADRID","BARCELONA","VALENCIA","MURCIA","SEVILLA"]);
    print_r($_POST);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <?=$nombre->pintar($_POST)?>
        <?=$telefo->pintar($_POST)?>
        <?=$texto->pintar($_POST)?>
        <?=$correo->pintar($_POST)?>
        <?=$edad->pintar($_POST)?><br>
        <?=$sexo->pintar($_POST)?><br>
        <?=$hobbys->pintar($_POST)?><br>
        <?=$select->pintar($_POST)?><br>
        <input type="submit" value="Enviar" nama="Enviar"/>
    </form>
</body>
</html>