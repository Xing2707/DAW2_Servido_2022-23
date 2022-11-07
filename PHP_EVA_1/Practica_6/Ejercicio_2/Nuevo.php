<?php
    $tema="";
    $hora=date("H");
    $minuto=date("i");
    $opcionesMinuto =[0,15,30,45];

    $mayores = array_filter($opcionesMinuto,function($m){
        global $minuto;
        return $m > $minuto;
    });

    if(empty($mayores)){
        $minuto = 0;
        $hora++;
        if($hora>23){
            $hora==00;
        }
    }else{
        $minuto= array_shift($mayores);
    }

    $errores =[];

    //verificar errores
    if(isset($_POST['Enviar'])){
        if(!empty($_POST['tema'])){
            $tema = $_POST['tema'];
        }else{
            $errores['tema'] = 'No puede estar vacio';
        }

        if(!empty($_POST['hora'])){
            $hora = $_POST['hora'];
        }else{
            $errores['hora'] = 'No puede estar vacio';
        }

        if(!empty($_POST['minuto'])){
            $minuto = $_POST['minuto'];
        }else{
            $errores['minuto'] = 'No puede estar vacio';
        }

        if(count($errores) == 0){
            //Guardar
           file_put_contents(
            "tema.csv",
            "$tema;$hora;$minuto\n",
            FILE_APPEND
           );
    
            //Redireccionar
            header("Location: Listado.php");

            //salir
            exit();
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        .error { 
                color: red;
                font-size: 20px ;
                font-weight: bold;
        }
        .error p{
            margin: auto;
            margin-bottom: 1%;
        }
    </style>
</head>
<body>
    <h1>Discoteca</h1>
    <form action="", method="post">
        <label for="tema">Tema</label>
        <input type="text" name="tema" id="tema" placeholder="Pon tu tema de musica" value="<?=$tema?>"><br><br>
        <?php
            if(isset($errores['tema'])){
                echo"<div class='error'>";
                echo"<p>".$errores['tema']."</p>";
                echo"</div>";
            }
        ?>
        <?php?>

        <label for="hora">Hora</label>
        <input type="number" name="hora" min="0"  max="23" size="1" id="hora" value="<?=$hora?>">

        <label for="minuto">Minuto</label>
        <select name="minuto" id="minuto" value="<?=$minuto?>">
            <?php
                array_walk($opcionesMinuto,function($op,$k, $d){
                    $sel = ($op==$d)?"selected":"";
                    echo "<option value='$op' $sel>$op</option>";
                },$minuto)
            ?>
        </select><br><br>

        <?php
            if(isset($errores['hora'])){
                echo"<div class='error'>";
                echo"<p>".$errores['hora']."</p>";
                echo"</div>";
            }
        ?>
        <?php?>

        <!-- <?php
            if(isset($errores['minuto'])){
                echo"<div class='error'>";
                echo"<p>".$errores['minuto']."</p>";
                echo"</div>";
            }
        ?> -->

        <label><input type="submit" name="Enviar" value="Enviar"></label>
    </form>
</body>
</html>