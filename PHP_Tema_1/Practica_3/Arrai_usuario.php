<?php
    $usuarios = [
        "jorge" => "1234",
        "amparo" => "admin",
        "mary" => "",
    ];

//Visusaliza nombre de usuario y contraseña.
    function ver_usuario($elemen,$clave){
        print("Usuario: ".$clave. ", Contraseña: ".$elemen. "<br>");
    }

    print("Usuario y Contraseña: <br>");
    print_r(array_walk($usuarios,'ver_usuario'));


//Genera hash para contraseña
    function genera_hash($var){
        return $var=password_hash($var, PASSWORD_DEFAULT);
    }

    $usuario_2= array_map('genera_hash',$usuarios);
    print("<br><br> Genera contraseña hash: <br>");
    print_r($usuario_2);


//Asigna nueva contraseña para los usuario que no tiene contraseña
    function asigna_contraseña($var){
        
        return ($var =="")? $var="tmp2022" : $var;
    }

    $usuario_3 = array_map('asigna_contraseña',$usuarios);
    print("<br><br> Cambiar usuario sin contraseña para tener contraseña: <br>");
    print_r($usuario_3);


//replaza contraseña nuevo al contrseña viejo
    $passw_cambiado = array_replace($usuarios,$usuario_3);
    print("<br> <br>Contraseña cambiado: <br>");
    print_r($passw_cambiado);

    
//Genera hash para nuevos usuario que tiene contraseña
    $usuario_final= array_map('genera_hash',$usuarios);
    print("<br> <br>Genera hash para nuevos contraseñas: <br>");
    print_r($usuario_final);



?>