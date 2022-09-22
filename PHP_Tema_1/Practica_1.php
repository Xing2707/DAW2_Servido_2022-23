<?php
$num_voc=0;
$num_con=0;
$pal;
$_GET;
$des=$_GET['descripcion'];

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
    <form action="Practica_1.php" methor="get">
        <fieldset>Formulario: <br/>
            descripcion: <input type="text" name="descripcion" id="" value="<?=$des?>"> <br/>
            <input type="submit" value="enviar">

            <!--<p><?=$des?></p>-->
            
        </fieldset>
    </form>
    <div>
        <?php if($_GET) { ?>
        <?php numero_vocal()?>
        <ul>
            <li>numero de vocales: <?=$num_voc?></li>
            <li>numero de consonantes:<?=$num_con?></li>
            <li>palindromo: </li>
        </ul>
        <?php }?>
    </div>
</body>
</html>