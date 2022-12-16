<?php
    if(isset($_GET['opcion'])){
        $configurado="Ya has configurado el cookies";
        if($_GET['opcion']=="Aceptar"){
            setcookie("valido",$configurado);
            header("location: acepdato.php");
        }else{
            header("location: denegado.php");
        }
    }

    function pintar($valo){
        if(empty($valo['valido'])){
            echo"
                <h1>Bien venido</h1>
                <div id='fondo'>
                    <form method='get'>
                        <label>
                            <span id='parrafo'>quieres acepta nuestro cookies?</span>
                        </label><br>
                        <label>
                            <input type='submit' name='opcion' value='Aceptar'>
                        </label>
                        <label>
                            <input type='submit' name='opcion' value='Denegar'>
                        </label>
                    </form>
                </div>"
            ;
        }else{
            echo"
                <h1>Bien venido</h1>
                <a href='acepdato.php'>Volver</a>"
            ;
        }
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
        html,body{
            height: 97%;
            width: 99%;
        }
        #fondo{
            width: 101.6%;
            background-color: cyan;
            text-align: center;
            height: 20%;
            position: relative;
            top:52%;
            left: -0.3%;
        }
        #fondo>form{
            height: 90%;
            padding: 2% 0% 0%;
        }
        #parrafo{
            font-size: 200%;
        }
        h1{
            text-align: center;
            position: relative;
            top:1%;
            font-size:100px;
            padding:auto;
            margin: auto;
            width: 100%;
            height: 30%;
        }
    </style>
</head>
<body>
    <?=pintar($_COOKIE);?>
</body>
</html>