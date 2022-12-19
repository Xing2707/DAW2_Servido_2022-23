<?php

session_name("Juanito");
session_start();
print_r($_SESSION);
$intento=isset($_SESSION["intento"])? $_SESSION["intento"]:4;
$intento--;
$_SESSION["intento"]=$intento;

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
    <h1>Te quedan <?=$intento?></h1>
</body>
</html>