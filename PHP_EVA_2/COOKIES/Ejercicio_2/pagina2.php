<?php
    include 'menu.php';
    if(isset($_COOKIE)){
        $colorF=$_COOKIE['colorFondo'];
        $colorT=$_COOKIE['colorTexto'];
        $nombre=$_COOKIE['nombre'];
    }else{
        $colorF="";
        $colorT="";
        $nombre="";
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
</head>
<style>
    body{
        background-color:<?=$colorF?>;
        color:<?=$colorT?>;
        text-align: center;
    }
</style>
<body>
    <?=pintar($nombre)?>
    <h1>Realmenta no se hace asi</h1>
    <h2>Hola!!!!!!!!!!!!!!!!!</h2>
    <p>Bien venido a pagina 2</p>
</body>
</html>