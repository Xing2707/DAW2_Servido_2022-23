<?php
    if(!isset($_SESSION['user'])){
        header('Location:../login.php?error=area_privado&url='.$_SERVER['REQUEST_URI']);
        exit;
    }
?>