<?php
    $num=rand(10,30);
    function rand_color(){
        return sprintf('#%06X',mt_rand(0,0xFFFFFF));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piramide_color</title>
    <style>
            #contenido{
                text-align: center;
                margin: 0px auto;
            }
            .item{
                padding: 5px 0px 10px 10px;
                letter-spacing: 10px;
                line-height: 10px;
                background-color: <?php echo rand_color()?>;
            }
    </style>
</head>
<body>
    <h1>Piramide de color</h1>
        <p id="contenido">
            <?php for($i=1; $i<=$num; $i++) { 
                
                for($b=1; $b<=$num-$i; $b++) {
                    print(" ");
                }
                for($a=1; $a<=($i*2)-1; $a++) {
                    print("<span class='item'>*</span>");
                }
                print("<br/>");
                //de momento no he visto diferencia entre "" y '' para print me sirve "" con '' para poner las etiquetas.     
            } ?>
        </p>
</body>
</html>