<?php
$vacio=false;
if(isset($_GET['descripcion'])){
    $des=$_GET['descripcion'];
    $vacio=false;
    if($des==""){
        $vacio=true;
    }
}

function calcular_consonante(){
    $num_con=0;
    $des=$_GET['descripcion'];
    for($i=0; $i< mb_strlen($des); $i++){
        $car=$des[$i];
        if((ord($car)< 65 && ord($car)>90) || (ord($car)<97 && ord($car)>122) || is_int($car))  {

        }else{
                if(ord($car)!= 65 && ord($car)!= 97 && ord($car)!= 69 && ord($car)!= 101 && ord($car)!= 73 && ord($car)!= 105 && ord($car)!= 79 && ord($car)!= 111 && ord($car)!= 85 && ord($car)!= 117){
                    $num_con+=1;
                }
            }
    }
    return $num_con;
}

function calcular_vocal(){
    $num_voc=0;
    $des=$_GET['descripcion'];
    for($i=0; $i< mb_strlen($des); $i++){
        $car=$des[$i];
        if((ord($car)< 65 && ord($car)>90) || (ord($car)<97 && ord($car)>122))  {

        }else{
            if(ord($car)== 65 || ord($car)== 97 || ord($car)== 69 || ord($car)== 101 || ord($car)== 73 || ord($car)== 105 || ord($car)== 79 || ord($car)== 111 || ord($car)== 85 || ord($car)== 117){
                $num_voc+=1;
            }
        }
    }
    return $num_voc;
}


function palitromo(){
    $pal;
    $fin=strlen($des)-1;
    $des=$_GET['descripcion']; 
                    
    for($i=0; $i<(mb_strlen($des)/2); $i++){
        if($des[$i] == $des[$fin]){
            $pal=true;
            $fin-=1;
        }else{
            $pal=false;
        }
    }
    return$pal;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <style>
        #fondo{
            height: 80%;
            width: 80%;
            margin: 0px auto;
            margin-top: 3%;
            border: 5px inset chartreuse;
        }
        #formulario{ 
            border: 2px solid red;
            margin:0px auto;
            margin-top: 5%;
            margin-bottom: 5%;
            height: 60%;
            width: 60%;
        }
        body{
            background-color: aqua;
        }
        #contenido{
            margin:0px auto;
            height: 70%;
            width: 70%;
        }

        #formulario>form>fieldset{
            text-align: center;
            padding: 3%;
        }

        #formulario>form>fieldset>.boton{
            background-color: azure;
            color:orangered;
            margin: 0.5%;
            width: 15%;
            padding: 2%;
            font-size: 120%;
        }
        #formulario>form>fieldset>.caja{
            padding: 3%;
            width: 50%;
            font-size: 150%;
        }
        #formulario>form>fieldset>#texto{
            font-size: 200%;
            font-weight: bold;
            color: silver;
            margin: 0px auto;
        }
        @media (max-width:320px){
            #formulario>form>fieldset>.caja{width:90%;}

            #contenido>h3{
                font-size: 60%;
                width: 100%;
            }

            #formulario>form>fieldset>#texto{
            font-size: 80%;
            }

            #formulario>form>fieldset>.caja{
            padding: 1%;
            width: 70%;
            font-size: 90%;
            }

            #formulario>form>fieldset>.boton{
            margin: 0.5%;
            width: 70%;
            padding: 1%;
            font-size: 80%;
            }

            #contenido>ul>li{
            margin: 1%;
            font-size: 70%;
            font-family:monospace;
            color:slategrey;

            }

        }
        #contenido>ul{
            margin: 3%;
            text-align: center;
            font-size: 150%;
            list-style-image: url('gota.jpg');
            font-family:monospace;
            color:slategrey;

        }
        #contenido>h3{
            text-align: center;
            margin: 2%;
            padding: 1%;
            background-color: gold;
        }
    </style>
</head>
<body>
    <div id="fondo">
        <div id="formulario">
        <form action="Practica_1.php" methor="get">
            <fieldset>
                <span id="texto">descripcion:</span> <br/><br/> <input type="text" class="caja" name="descripcion" id="" value='<?=$des?>'> <br/><br/>
                <input type="submit" class="boton" value="enviar">
                
            </fieldset>
        </form>

        </div>
        
        <div id="contenido">
            <?php if($vacio){?>
                <h3>Deben Introducir Una Palabra!</h3>
            <?php }else{ ?>
                <?php if($_GET){ ?>
                    <?php
                        $voc=calcular_vocal();
                        $con=calcular_consonante();
                        $opc=palitromo();
                    ?>
                    <ul>
                        <li>numero de vocales: <?=$voc?></li>
                        <li>numero de consonantes:<?=$con?></li>
                        <li>palindromo: <?php if($opc){print("Si");} else{print("No");}?> </li>
                    </ul>
                <?php } ?>
            <?php }?>
        </div>
    </div>
</body>
</html>