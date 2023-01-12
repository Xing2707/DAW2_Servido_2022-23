<?php

require_once("../SRC/init.php");
spl_autoload_register(function($class){
    $classPath=realpath("./Formulario");
    $file=str_replace('\\','/',$class);
    require("$classPath/${file}.php");

});
$loginError=false;
$userName= new Simple\Texto("Nombre Usuario","Introducer nombre de Usuario",3,20,20,"Username","/^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$/");
$passWord= new Simple\PassWord("Cotraseña","Introduce contraseña",4,22,20,"password");
$captcha= new Simple\Texto("captcha"," ",4,4,4,"capt");
$captchaGen= isset($_SESSION['captcha'])? $_SESSION['captcha']:generarcaptcha();

    if(isset($_POST['Registrar'])){
        $MyDataBase -> ejecuta("INSERT INTO PerfilUsuario( username,passwd,correo) VALUES(?,?,?)",
            $_POST[$userName->getName()],
            password_hash( $_POST[$passWord->getName()],PASSWORD_DEFAULT),
            $_POST['correo']
        );

        $insertado = $MyDataBase->getExecuted();
        if($insertado){
            Mailer::sendEmail(
                $_POST['correo'],
                "Nuevo usuario",
                <<<EOL
                    Bienvenido {$_POST[$userName->getName()]},
                    Has hecho bien en gistrarte,
                EOL
            );
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
    <?php if($insertado) { ?>
        <form action="registre.php" method="post">
            <?php $userName->pintar($_POST)?>
            <?php $passWord->pintar($_POST)?>
            <label for="correo">Correo: <input type="email" name="correo" id="correo">
            <?php $captcha->pintar()?>
        </label>
            <input type="submit" name="Registrar" value="Registrar">
        </form>
    <?php }else {?>
    <?php } ?>
</body>
</html>