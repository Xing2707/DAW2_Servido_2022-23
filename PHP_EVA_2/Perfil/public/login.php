<?php
    session_name("login");
    session_start();
    require_once("../SRC/init.php");
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

    if(isset($_COOKIE['recuerdame'])){
        $MyDataBase -> ejecuta("SELECT * FROM PerfilUsuario WHERE userid = ? ",$_SESSION['id']);
        $autologin = $MyDataBase -> obtenDatos();
        if($autologin['username'] == $_SESSION['nombre']){
            header("location: ./listado.php");
        }
    }

    if($_POST['Login']){
        if($userName->validar($_POST) && $passWord->validar($_POST)){

            $nombre=clean_input($_POST[$userName->getName()]);
            $contraseña=clean_input($_POST[$passWord->getName()]);
            $recuerdame=$_POST['recuerdame'];

            $MyDataBase -> ejecuta("SELECT * FROM PerfilUsuario WHERE username = ?",$nombre);
            $user = $MyDataBase->obtenDatos();

            if(password_verify($contraseña,$user['passwd'])){
                $_SESSION['id']=$user['userid'];
                $_SESSION['nombre'] = $user['username'];

                if(isset($_POST['recuerdame']) && $_POST['recuerdame']=="on"){
                    $token = bin2hex(openssl_random_pseudo_bytes($config['LONG_TOKEN']));
                    
                    $MyDataBase -> ejecuta(
                        "INSERT INTO token( valor,userid) VALUES(?,?)",
                        $token,
                        $_SESSION['id']
                    );

                    setcookie(
                        "recuerdame",
                        $token,
                        [
                            "expires" => time() + 7 * 24 * 60 * 60,
                            "httponly" => true
                        ]
                    );

                    header("location: ./listado.php");
                    die();
                }
                if(isset($_GET['redirect'])){
                    header("location: {$_GET['redirect']}");
                }
                    header("location: ./listado.php");
                    die();
                
            }else{
                echo "Error";
            }
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
    <form method="post">
        <?=$userName->pintar($_POST);?>
        <?=$passWord->pintar($_POST);?>
        <!-- <?//=$captcha->pintar($_POST);?> -->
        <label>recuerdame <input type="checkbox" name="recuerdame" id="recuerdame"></label>
        <label><input type="submit" value="Login" name="Login"></label>
    </form>
</head>
<body>
    
</body>
</html>