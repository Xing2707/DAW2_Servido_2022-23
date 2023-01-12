<?php
    session_name("LOGIN");
    session_start();

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <form method="post">
        <?=$userName->pintar($_POST);?>
        <?=$passWord->pintar($_POST);?>
        <?=$captcha->pintar($_POST);?>

    </form>
</head>
<body>
    
</body>
</html>