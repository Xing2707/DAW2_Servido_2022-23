<?php 
    $DireccionIP=$_SERVER['REMOTE_ADDR'];

    $Ruta=$_SERVER['HTTP_USER_AGENT'];
    $PosicionInicial=strpos($Ruta,';',0)+1;
    $Longitud=strpos($Ruta,';',$PosicionInicial)-$PosicionInicial;
    $Equipo=substr($Ruta,$PosicionInicial,$Longitud);

    $GetIdioma=$_SERVER['HTTP_ACCEPT_LANGUAGE'];
    $PosicionIdioma=strpos($GetIdioma,'-',0);
    $Idioma=substr($GetIdioma,0,$PosicionIdioma);

    function imprimir(string $valo1,string $valo2,string $valo3){
        switch($valo2){
            case "en":  
                print("<h1>Welcome</h1>");
                print("<p> Your visiting IP address is:".$valo3."</p>");
                print("<p> Your Visiting computer is: ".$valo1."</p>");
                print("<p> Your visiting language is: English");
                break;
            case "es":
                print("<h1>Bien Venido</h1>");
                print("<p> Tu direccion IP de visita es: ".$valo3."</p>");
                print("<p> Tu Equipo de visita es: ".$valo1."</p>");
                print("<p> Tu idioma de visita es: Español");
                break;
            case "zh":
                print("<h1>欢迎</h1>");
                print("<p> 您的访问IP地址是: ".$valo3."</p>");
                print("<p> 您的访问计算机是: ".$valo1."</p>");
                print("<p> 您的访问语言是:中文");
                break;
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
    <div>
        <?=imprimir($Equipo,$Idioma,$DireccionIP)?>
    </div>
</body>
</html>