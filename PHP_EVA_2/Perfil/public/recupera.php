<?php
    require_once("../SRC/init.php");
    require_once("./Mailer.php");

    if(isset($_POST['Recupera'])){
        $MyDataBase -> ejecuta(
            "SELECT userid FROM PerfilUsuario WHERE correo=?",
            $_POST['correo'],
        );
        $userid=$MyDataBase->obtenDatos();
        if($userid!=null){
            $MyDataBase -> ejecuta(
                "SELECT valor FROM token WHERE userid=?",
                $userid['userid'],
            );
            $token=$MyDataBase->obtenDatos();
            $MyDataBase-> ejecuta("UPDATE token SET expiracion NOW() + INTERVAL 15 MINUTE ");

            
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
</head>
<body>
    <form action="" method="post">
        <label for="correo">Introduce tu correo de registro <input type="email" name="correo" id="correo"></label>
        <label><input type="submit" name="Recupera" value="Recupera"></label>
    </form>
</body>
</html>