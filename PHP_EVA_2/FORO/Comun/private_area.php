<?php
    if(!isset($_SESSION['user'])){
        header('Location:../FORO/login.php?error=area_privado&url='.$_SERVER['REQUEST_URI']);
        exit;
    }
?>