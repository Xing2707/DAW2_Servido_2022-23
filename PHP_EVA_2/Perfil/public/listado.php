<?php
    session_name('login');
    session_start();
    require_once("../SRC/recuerdame.php");
    
     if(isset($_SESSION['nombre'])){
        $MyDataBase -> ejecuta("SELECT * FROM PerfilUsuario");
        $user = $MyDataBase->obtenDatos();
    }elseif(!isset($_SESSION['nombre']) && !isset($_COOKIE['recuerdame'])){
        header("location:./login.php?redirect=listado.php");
    }

    $title="listado de usuario";
    $page_header="Listado";
    $pageId="listado";
    $content="Esto es contenido";
    require_once("./template.php");

    ob_start();
    $content=ob_get_clean();
?>
    <?php foreach($user as $valor){?>
    <ul>
        <li>Nombre:<?=$valor['username']?></li>
        <?php if($valor=null){ ?>
            <li><img src=<?=$valor?> alt="imagen de usuario">
            <?php }?>
        <li>descripcion:<?=$valor?></li>
    </ul>
    <?php }?>