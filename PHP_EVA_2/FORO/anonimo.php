<?php
    session_name("LOGIN");
    session_start();
    const user_anonimo="anonimo";
    $_SESSION['user']=user_anonimo;
    header('Location:./main/main.php');
?>