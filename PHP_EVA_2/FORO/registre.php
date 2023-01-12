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

    $userName= new Simple\Texto("Nombre Usuario","Introducer nombre de Usuario",3,20,20,"Username","/^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$/");
    $passWord= new Simple\PassWord("Cotraseña","Introduce contraseña",8,22,20,"password");
    $passWord_2= new Simple\PassWord("Repite Contraseña","Repite contraseña",8,22,20,"password2");
    $captcha= new Simple\Texto("captcha"," ",4,4,4,"capt");
    $captchaGen= isset($_SESSION['captcha'])? $_SESSION['captcha']:generarcaptcha();
    $password_vf=true;
    $repedido=false;

    if(isset($_POST['Enviar'])){
        if($userName->validar($_POST) && $passWord->validar($_POST) && $passWord_2->validar($_POST)){
            if($_POST[$captcha->getName()]==$captchaGen){
                $_SESSION['captcha']=$captchaGen;
                
                if($_POST[$passWord->getName()]==$_POST[str_replace(" ","_",$passWord_2->getName())]){
                    $nombreuser=clean_input($_POST[str_replace(" ","_",$userName->getName())]);
                    $cont=0;
                    $consulta1=$mysql->prepare("SELECT * FROM usuario");
                    $consulta1->execute();
                    while($row = $consulta1->fetch()){
                        $listauser[$cont]=$row['username'];
                        $cont++;
                    }
                    foreach($listauser as $valor){
                        if($nombreuser==$valor){
                            $repedido=true;
                        }
                    }
                    if(!$repedido){
                        $contraseña=password_hash(clean_input($_POST[$passWord->getName()]),PASSWORD_DEFAULT);

                        $consulta2=$mysql->prepare("INSERT INTO usuario(username,pass) VALUES(:username,:pass)");
                        $consulta2->bindParam(':username',$nombreuser);
                        $consulta2->bindParam(':pass',$contraseña);
                        $consulta2->execute();

                        header("location:./login.php");
                        exit;
                    }
                }else{
                    $password_vf=false;
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
        <?=$passWord_2->pintar($_POST)?><br>
        <label id="cajaGrande">
            <span id="caja1"><?=$captcha->pintar($_POST)?></span>
            <span id="caja2"><?=pintarcaptcha($captchaGen)?></span> 
        </label>
        <label id="caja3"><input type="submit" value="Enviar" name="Enviar"></label>
    </form>
    <div id="ErroPass"><p><?php if(!$password_vf){echo "Error las contraseñas deben ser igual";}?></p></div>
    <div id="ErroUser"><p><?php if($repedido){echo "Error Nombre de usuario repedido";}?></p></div>
</body>
</html>