<?php
    require("Usuario.php");
    require("UsuarioPremium.php");
    $user1=new UsuarioPremium("Cesar","Ignacio","futbool");
    $user2=new UsuarioPremium("Orga","Visto","tenis");

    $user1 -> introducirResultado("victoria");
    $user1 -> introducirResultado("victoria");
    $user1 -> introducirResultado("victoria");
    $user1 -> introducirResultado("derrota");
    $user1 -> introducirResultado("victoria");
    $user1 -> introducirResultado("empate");
    $user1 -> introducirResultado("derrota");
    $user1 -> introducirResultado("derrota");

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