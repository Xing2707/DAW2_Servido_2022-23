<?php
    $nombre="Usuario";
    $r=0;
    // $r=rand(1,100);
    $pi=3.14;
    $_GET;  //Informacion de cabezera
    // print_r($_GET);
    if (isset($_GET ['radio'])){
        $r = $_GET ['radio'];
    }else{
        $r=0;
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
        #titulo{ 
            background-color: aqua; 
            margin: 15px;
        }

        #contenido{
            font-size: 20px;
            font-family:serif;
            color:#F44336;
            margin: 15px;
            padding: 0px 10px 10px;
        }
    </style>
</head>
<body>
        <div>
            <form action="Practica_5.php" method="get">
                Radio: <input type="number" step="any" name="radio" id="" value='<?=$r?>'>    <!-- name sirve para cliente, id sirve para servido, step sirver para contolar los decimales cpn stpe="0.00", pero si lleva step tiene introducir numero con 1 decimal minimo, puedes poner any no oblica poner decimales-->
                <input type="submit" value="calcular">
            </form>
        </div>

        <h1 id="titulo">Caluculador de Circuferencia con el radio generado automaticamente</h1>
        <p id="contenido">
            bienvenido nuestro pagina <?php echo "$nombre"?><br/><br/>
            <?php $total=$r*M_PI?>
            arede de circulo es <?php echo "$total"?><br/><br/>
            longitud de circulo es <?=2*$r*M_PI?>
        </p> 
</body>
</html>