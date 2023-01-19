<?php
    session_name('login');
    session_start();
    require_once("../SRC/recuerdame.php");
    
     if(isset($_SESSION['nombre'])){
        $MyDataBase -> ejecuta("SELECT * FROM PerfilUsuario WHERE username=?",$_SESSION['nombre']);
        $user = $MyDataBase->obtenDatos();
    }elseif(!isset($_SESSION['nombre']) && !isset($_COOKIE['recuerdame'])){
        header("location:./login.php?redirect=listado.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
    <h1>HOLLIWIS</h1>
<nav>
    <p>nombre:<?=$user['username']?></p>
    <?php if($user['img']!=null) {?>
        <img src=<?=$user['img']?> alt=<?=$user['img']?> >
    <?php }?>
    <p>descripcion:<br><?=$user['descripcion']?></p>
    <p><a href="./edid.php">edidar tu pelfil</a></p>
</nav>
</body>
</html>