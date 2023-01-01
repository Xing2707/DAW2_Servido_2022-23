<?php
session_name("LOGIN");
session_start();
require_once("../Comun/private_area.php");
function pintarpagina(array $enlaces,String $usuario){
    for($i=0; $i<count($enlaces); $i++){    
            echo "<a href=".$enlaces[$i][0]." class='enlace'>".$enlaces[$i][1]."</a>";
            echo "<p class='usuario'>User:".$enlaces[$i][2]."</p>";
    }
    if($usuario=="anonimo"){
        echo
        "<div id='new'>
            <img src='../IMG/precision.png' onclick='newForo()'/>
        </div>";
    }
    
}
$enlaces=[];
array_push($enlaces,["../bienVenido.php","Bien Venido","admin"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="control.css">
    <script src="control.js"></script>
    <title>main</title>
</head>
<body>

    <div id="contenido"><?=pintarpagina($enlaces,$_SESSION['user']);?><div>
</body>
</html>
