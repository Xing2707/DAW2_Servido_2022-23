<?php
session_name("LOGIN");
session_start();
require_once("../Comun/private_area.php");
require_once("../Comun/basedata.php");

$enlaces=[];
$row;
$username;

$consulta_1=$mysql->prepare("SELECT * FROM creaforo");
$consulta_1->execute();
while($row = $consulta_1->fetch()){
    $consulta_2=$mysql->prepare("SELECT username FROM usuario WHERE userid = :userid");
    $consulta_2->execute([':userid' => $row['userid']]);
    $username=$consulta_2->fetch();
    array_push($enlaces,[$row['direccion'],$row['titulo'],$username['username']]);
}

function pintalista(array $enlaces,String $usuario){
    for($i=0; $i<count($enlaces); $i++){    
            echo "<a href=".$enlaces[$i][0]." class='enlace'>".$enlaces[$i][1]."</a>";
            echo "<p class='usuario'>User:".$enlaces[$i][2]."</p>";
    }
    if($usuario!="anonimo"){
        echo
        "<div id='new'>
            <img src='../IMG/precision.png' onclick='newForo()'/>
        </div>";
    }
    
}
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
    <div id="loginout">
        <form action="../loginout.php" method="get">
            <label><input type="submit" value="loginout" name="loginout"></label>
        </form>
    </div>
    <div id="contenido"><?=pintalista($enlaces,$_SESSION['user']);?><div>
</body>
</html>
