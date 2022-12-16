<?php

    // header("Location: redireccion.php");
    // die(); //todo cabezera tiene que venir ante que cualquier contenido.
    // //header , location deben ir siemple por delante.
    //-----------------------------------------------------------------------

    $claro=(isset($_COOKIE['claro']))? $_COOKIE['claro']:0;

     setcookie("galleta","chichahoy");  // setcookie(nombre de cookie, contenido de cookie)
     setcookie("claro",$claro+1);
    print_r($_COOKIE);
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
    <h1>Esto no se ve</h1>
</body>
</html>