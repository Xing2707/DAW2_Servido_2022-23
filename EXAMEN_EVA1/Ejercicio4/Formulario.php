<?php
    spl_autoload_register(function($class){
        $classPath=realpath("./");
        $file=str_replace('\\','/',$class);
        require("$classPath/${file}.php");

    });
    $correcto;
    $nombre=new Simple\Texto("Nombre","Introduce Nombre de queso",4,20,16,"nombre","/[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?)*/");
    $direccion=new Simple\Texto("Direccion","Introduce Direccion",5,30,10,"direccion",);
    $envio=new Multiple\Checkbox("Envio",["Caja madera","Tarjeta regalo","Envio urgnete","panecillas","Membrillo"]);

    if($_POST["Enviar"]){
        if($nombre->validar($_POST) && $direccion->validar($_POST) && $envio->validar($_POST)){
            $correcto="<p>Gracias por su pedido</p>";
        }else{
            $correcto=null;
        }
    }
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
        <?=$nombre->pintar($_POST);?><br>
        <?=$direccion->pintar($_POST);?><br>
        <label>
            Envio: <?=$envio->pintar($_POST);?><br>
        </label>
        <input type="submit" name="Enviar" value="Enviar"/>
    </form>
    <?php if(!empty($correcto)){ echo $correcto;}?>
</body>
</html>