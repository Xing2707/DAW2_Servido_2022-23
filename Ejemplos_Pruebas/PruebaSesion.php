<?php
    session_start();
    $nombre=nombreRamdo();
    $_SESSION['nombre']=$nombre;
    print_r($_SESSION);

    function nombreRamdo(){
        $longitud = 15;
        $valor;
        for( $i=0; $i<$longitud; $i++){
            $valor.=chr(mt_rand(97,122));
        }
        return $valor;
    }
?>