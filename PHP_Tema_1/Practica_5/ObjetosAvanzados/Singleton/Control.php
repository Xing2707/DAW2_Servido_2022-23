<?php
spl_autoload_register(function ($class){
    $classPath ="./";
    require("$classPath${class}.php");
});


$user1=Config::singleton();
$user1=Config::singleton() -> setNombre("Hola");
$user1=Config::singleton() -> getNombre();
$user2=Config::singleton();
$user3=Config::singleton();

echo $user1=Config::singleton() -> getNombre();
echo $user2=Config::singleton() -> getNombre();
echo $user3=Config::singleton() -> getNombre();
?>