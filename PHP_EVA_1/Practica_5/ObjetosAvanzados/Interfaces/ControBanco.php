<?php
    require("BancoMalvado.php");
    require("BitCoinConan.php");
    require("BancoMaloMalisimo.php");

    $malvado = new BancoMalvado();
    $malvado -> setCuenta("BancoMalvado");
    $malvado -> setCantidad(100);
    $malvado -> setConexion(true);
    $malvado -> setSeguridad(true);


    if($malvado->estableceConexion()){
        echo $malvado->getCuenta(). " establece conexion <br>";
    }else{ echo "Errol! <br>"; }

    if($malvado -> compruebaSeguridad()){
        echo "Conexion segura ".$malvado->getCuenta()."<br>";
    }else{ echo "Errol! <br>"; }
    echo $malvado->pagar($malvado->getCuenta(),$malvado->getCantidad())."<br><br>";

    $bitcointcona = new BitCoinConan();
    $bitcointcona -> setCuenta("BitCoinConan");
    $bitcointcona -> setCantidad(100);
    $bitcointcona -> setConexion(true);
    $bitcointcona -> setSeguridad(true);

    if($bitcointcona->estableceConexion()){
        echo $bitcointcona->getCuenta(). " establece conexion <br>";
    }else{ echo "Errol! <br>"; }

    if($bitcointcona -> compruebaSeguridad()){
        echo "Conexion segura ".$bitcointcona->getCuenta()."<br>";
    }else{ echo "Errol! <br>"; }
    echo $bitcointcona->pagar($bitcointcona->getCuenta(),$bitcointcona->getCantidad())."<br><br>";

    $malomalisimo = new BancoMaloMalisimo();
    $malomalisimo -> setCuenta("Banco Malo Malisimo");
    $malomalisimo -> setCantidad(100);
    $malomalisimo -> setConexion(true);
    $malomalisimo -> setSeguridad(true);

    if($malomalisimo->estableceConexion()){
        echo $malomalisimo->getCuenta(). " establece conexion <br>";
    }else{ echo "Errol! <br>"; }

    if($malomalisimo -> compruebaSeguridad()){
        echo "Conexion segura ".$malomalisimo->getCuenta()."<br>";
    }else{ echo "Errol! <br>"; }
    echo $malomalisimo->pagar($malomalisimo->getCuenta(),$malomalisimo->getCantidad());

    
?>