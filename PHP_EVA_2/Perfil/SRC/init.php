<?php

    require_once("../SRC/config.php");
    require_once("../SRC/BaseDato.php");
    require_once("../vendor/autoload.php");
    require_once("../SRC/cleanInput.php");
    $title="Linkedin";

    $MyDataBase = BaseDato::obtenerInstancia();

    $MyDataBase -> inicializa($config['db_name'],$config['db_user'],$config['db_passw']);
    
?>