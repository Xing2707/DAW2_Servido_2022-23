<?php
    session_name("LOGIN");
    session_start();
    require_once("./Comun/basedata.php");
    require_once("./Comun/cleanInput.php");

    spl_autoload_register(function($class){
        $classPath=realpath("./Formulario");
        $file=str_replace('\\','/',$class);
        require("$classPath/${file}.php");

    });

    $loginError=false;
    $userName= new Simple\Texto("Nombre Usuario","Introducer nombre de Usuario",3,20,20,"Username","/^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$/");
    $passWord= new Simple\Texto("Cotraseña","Introduce contraseña",4,22,20,"password");
    $captcha= new Simple\Texto("captcha"," ",4,4,4,"capt");
    $captchaGen= isset($_SESSION['captcha'])? $_SESSION['captcha']:generarcaptcha();

        if(isset($_POST['Enviar'])){
            if($userName->validar($_POST) && $passWord->validar($_POST)){
                if($_POST[$captcha->getName()]==$captchaGen){

                    $_SESSION['captcha']=$captchaGen;
                    $nombreuser=clean_input($_POST[str_replace(" ","_",$userName->getName())]);
                    $contraseña=clean_input($_POST[$passWord->getName()]);

                    $consulta=$mysql->prepare("SELECT * FROM usuario WHERE username = :username LIMIT 1");
                    $consulta->execute([':username' => $nombreuser]);
                    $user=$consulta->fetch();

                    if(isset($user) && password_verify($contraseña,$user['pass'])){
                        $_SESSION['user']=$nombreuser;
                        header("location: ./main/main.php");
                        exit;
                    }else{
                        $loginError=true;
                    }
                }else{
                    $captchaGen=generarcaptcha();
                    $_SESSION['captcha']=$captchaGen;
                }
            }
        }

    function generarcaptcha(){
        $lengthcaptcha = 4;
        $capcha="";
        for($i=0; $i<$lengthcaptcha; $i++){
            $capcha.=chr(mt_rand(65,90));
        }
        return $capcha;
    }

    function pintarcaptcha($valor){
        echo"<p id='captcha'>";
        for($i=0; $i<strlen($valor); $i++){
            echo"<span id='captcha$i'>".$valor[$i]."</span>";
        }
        echo "</p>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Formulario/control.css">
    <script defer src="Formulario/control.js"></script>
</head>
<body>
    <form method="post">
        <?=$userName->pintar($_POST)?><br>
        <?=$passWord->pintar($_POST)?><br>
        <label id="cajaGrande">
            <span id="caja1"><?=$captcha->pintar($_POST)?></span>
            <span id="caja2"><?=pintarcaptcha($captchaGen)?></span> 
        </label>
        <label id="cajaEnlace"><p><a href="./anonimo.php">Entra con usuario anonimo</a></p></label>
        <label ><a href="./registre.php">Registrate</a></label><br>
        <label id="caja3"><input type="submit" value="Enviar" name="Enviar"></label>
    </form>
    <div><p><?php if($loginError){echo "Error Usuario no encotrado o contraseña incorrecto";}?></p></div>
</body>
</html>