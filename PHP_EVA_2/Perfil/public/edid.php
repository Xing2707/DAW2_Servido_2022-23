<?php
    session_name("privado");
    session_start();
    require_once("../SRC/recuerdame.php");

    if(!isset($_SESSION['nombre'])){
        header("location:./login.php?redirect=edid.php");
        die();
    }

    if(isset($_POST['Actualizar'])){
        $MyDataBase -> ejecuta(
            "UPDATE PerfilUsuario SET descripcion=? WHERE userid=?",
            $_POST['descripcion'],
            $_SESSION['id']
        );
    }

    if(isset($_FILES['imagen'])){
        $nombreTmp = $_FILES['imagen']['tmp_name'];
        $nombre = $_FILES['imagen']['name'];
        $tipo = $_FILES['imagen']['type'];
        if($tipo=="image/jpeg" || $tipo=="image/png"){
            if($_FILES['imagen']['error'] == 0){
                move_uploaded_file($nombreTmp,"upload/perfiles/".$_SESSION['id']."_".$nombre.".png");
                
                $MyDataBase->ejecuta(
                    "UPDATE PerfilUsuario SET img=? WHERE userid=?",
                    "upload/perfiles/".$_SESSION['id']."_".$nombre.".png",
                    $_SESSION['id']
                );
            }else {
                echo "error subida de imagen";
            }
        }
    }


    $MyDataBase -> ejecuta(
        "SELECT * FROM PerfilUsuario WHERE userid=?",$_SESSION['id']
    );
    $usuario = $MyDataBase->obtenDatos();

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
    <h1>EDITAR TU PERFIL</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="imagen">Imagen <input type="file" name="imagen" accept="image/png,image/jpeg" id="imagen"></label><br><br>
        <textarea name="descripcion" id="descripcion" cols="30" rows="10" style="resize:none"><?=$usuario['descripcion']?></textarea><br><br>
        <label><input type="submit" name="Actualizar" value="Actualizar"></label>
    </form>
    
</body>
</html>