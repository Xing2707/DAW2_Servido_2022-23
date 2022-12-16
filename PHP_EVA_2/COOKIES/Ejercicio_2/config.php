<?php
    include 'menu.php';
    $error="";
    $colorF="";
    $colorT="";
    $nombre="";
    if(isset($_POST["Enviar"])){
        if(!empty($_POST['nombre'])){
            $colorF=$_POST['colorFondo'];
            $colorT=$_POST['colorTexto'];
            $nombre=$_POST['nombre'];
            setcookie("colorFondo",$colorF);
            setcookie("colorTexto",$colorT);
            setcookie("nombre",$nombre);
        }else{
            $error="Deben Introducir Un nombre";
        }
        
    }

    if(isset($_COOKIE)){
        $colorF=$_COOKIE['colorFondo'];
        $colorT=$_COOKIE['colorTexto'];
        $nombre=$_COOKIE['nombre'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="control.css">
    <style>
        body{
            background-color:<?=$colorF?>;
            color:<?=$colorT?>;
        }
    </style>
</head>
<body>
    <?=pintar($nombre)?><br>
    <form method="post">
        <label>
            Color de fondo: <input type="color" name="colorFondo" value="<?=$colorF?>">
        </label><br><br>
        <label>
            Color de letra <input type="color" name="colorTexto" value="<?=$colorT?>">
        </label><br><br>
        <label>
            nombre: <input type="text" name="nombre" value="<?=$nombre?>">
        </label><br><br>
        <?php if(!empty($error)){?>
            <p><?=$error?></p>
        <?php } ?>
        <input type="submit" value="Enviar" name="Enviar">
    </form>
</body>
</html>