<?php
    require("Usuario.php");
    $user1=new Usuario("PePe","Calcia","tenis");
    $user2=new Usuario("Ana","Maria","tenis");

    $user1 -> introducirResultado("victoria");
    $user1 -> introducirResultado("victoria");
    $user1 -> introducirResultado("derrota");
    $user1 -> introducirResultado("victoria");
    $user1 -> introducirResultado("victoria");
    $user1 -> introducirResultado("victoria");
    $user1 -> introducirResultado("empate");
    $user1 -> introducirResultado("victoria");
    $user1 -> introducirResultado("victoria");
    $user1 -> getPartidos();
?>