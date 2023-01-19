<?php

require_once("../SRC/init.php");
require_once("./Mailer.php");
$EnvairCorreo=new Mailer();

spl_autoload_register(function($class){
    $classPath=realpath("../Formulario");
    $file=str_replace('\\','/',$class);
    require("$classPath/${file}.php");

});
$loginError=false;
$userName= new Simple\Texto("Nombre Usuario","Introducer nombre de Usuario",3,20,20,"Username","/^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$/");
$passWord= new Simple\PassWord("Cotraseña","Introduce contraseña",4,22,20,"password");
// $captcha= new Simple\Texto("captcha"," ",4,4,4,"capt");
// $captchaGen= isset($_SESSION['captcha'])? $_SESSION['captcha']:generarcaptcha();

    if(isset($_POST['Registrar'])){

        $MyDataBase -> ejecuta("INSERT INTO PerfilUsuario( username,passwd,correo) VALUES(?,?,?)",
            $_POST[$userName->getName()],
            password_hash( $_POST[$passWord->getName()],PASSWORD_DEFAULT),
            $_POST['correo']
        );

        $insertado = $MyDataBase->getExecuted();
        if($insertado){
            $EnvairCorreo->enviar($_POST);
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
        <form action="registre.php" method="post">
            <?=$userName->pintar($_POST)?><br>
            <?=$passWord->pintar($_POST)?><br>
            <label for="correo">Correo: <input type="email" name="correo" id="correo">
             <!--<?//=$captcha->pintar()?> -->
            </label><br>
            <label><input type="submit" name="Registrar" value="Registrar"></label>
        </form>
</body>
</html>