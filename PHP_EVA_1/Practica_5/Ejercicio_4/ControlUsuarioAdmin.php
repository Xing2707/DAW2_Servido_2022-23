<?php
    require("Usuario.php");
    require("UsuarioAdministrador.php");
    $user1=new UsuarioAdministrador("Juan","Carlos","paloncesto");
    $user2=new UsuarioAdministrador("Gema","Victoria","palonmano");

    $user1 -> introducirResultado("victoria");
    $user1 -> introducirResultado("victoria");
    // $user1 -> introducirResultado("derrota");
    $user1 -> introducirResultado("victoria");
    $user1 -> introducirResultado("derrota");
    $user1 -> introducirResultado("derrota");
    $user1 -> introducirResultado("empate");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{color:aqua;}
    </style>
</head>
<body>
     <?=$user1 -> imprimirInformacion()?>
</body>
</html>
