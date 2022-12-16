<?php
     spl_autoload_register(function ($class){
        $classPath ="./";
        require("$classPath${class}.php");
    });

    $examenFacil=new ExamenFacil();
    $examenChungo=new ExamenChungo();
    $examenHP=new ExamenHP();
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
    <?=$examenFacil->ObtenerNota();?><br>
    <?=$examenChungo->ObtenerNota();?><br>
    <?=$examenHP->ObtenerNota();?><br>
    <?=$examenFacil->setFecha("12/10/2022");?>
    <?=$examenFacil->getFecha();?>
</body>
</html>