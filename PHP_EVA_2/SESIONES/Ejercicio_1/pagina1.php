<?php
    session_name("formulario");
    session_start();
    include 'menu.php';

    $colorF=isset($_SESSION['colorFondo'])? $_SESSION['colorFondo']: " ";
    $colorT=isset($_SESSION['colorTexto'])? $_SESSION['colorTexto']: " ";
    $nombre=isset($_SESSION['nombre'])? $_SESSION['nombre']: " ";
    
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
    <p>Bien venido a pagina 1</p>
</body>
</html>