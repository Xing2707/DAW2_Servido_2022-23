<?php
    session_name("Juego");
    session_start();
    const DIEZ = 10;
    const CERO = 0;
    const TRES = 3;
    $ganar=false;
    $num="";
    $parrafo="";
    $numero = isset($_SESSION['numero'])? $_SESSION['numero']: mt_rand(CERO,DIEZ);
    $intento= isset($_SESSION['intento'])? $_SESSION['intento'] : TRES;

    if(isset($_GET['Enviar'])){
        $num=$_GET['numero'];
        if($num == $numero){
            $ganar=true;
            $intento= TRES;
            $numero=mt_rand(CERO,DIEZ);
            $_SESSION['numero']=$numero;
            $_SESSION['intento']=$intento;
        }else{
            $intento --;
            $_SESSION['numero']=$numero;
            $_SESSION['intento']=$intento;
            if($num < $numero){
                $parrafo="Numero introducido es menor que el numero adivina";
            }else{
                $parrafo="Numero introducido es mayor que el numero adivina";
            }
        }
    }

    if($intento == CERO){
        $intento=TRES;
        $_SESSION['intento']=$intento;
    }
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
    <form method="get">
        <label>
            Introducer Numero: <input type="number" name="numero" value=<?=$num?>>
        </label>
        <label>
            <input type="submit" name="Enviar" value="Enviar">
        </label>
    </form>
    <p><?=$parrafo?></p>
    <p>intentos: <?=$intento?></p>
    <?php ($ganar)? print("<p>Ya has Ganado</p>") : print("") ; ?>
</body>
</html>