<?php
    if(!isset($_COOKIE['valido'])){
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{text-decoration: none;}
    </style>
</head>
<body>
    <h1><?php print_r($_COOKIE['valido'])?></h1>
    <a href="index.php">Inicio</a>
</body>
</html>