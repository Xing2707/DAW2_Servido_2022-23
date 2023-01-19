<?php
    require_once("../SRC/init.php");
    if(!isset($_SESSION['nombre'])){
        if(isset($_COOKIE['recuerdame'])){
            $MyDataBase -> ejecuta(
                "SELECT Per.userid,Per.username,tok.valor FROM PerfilUsuario Per JOIN token tok ON Per.userid=tok.userid WHERE tok.valor = ? AND tok.expiracion > now()",
                $_COOKIE['recuerdame']
            );

            $token = $MyDataBase->obtenDatos();

            if($token != null){
                $_SESSION['id'] = $token['userid'];
                $_SESSION['nombre'] = $token['username'];
                setcookie(
                    "recuerdame",
                    $token,
                    [
                        "expires" => time() + 7 * 24 * 60 * 60,
                        "httponly" => true
                    ]
                );

                $MyDataBase -> ejecuta(
                    "UPDATE token SET expiracion =now() + INTERVAL 7 DAY WHERE valor=?",
                    $token['valor']
                );
            }
        }
    }
?>