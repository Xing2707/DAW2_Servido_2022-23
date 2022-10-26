<?php

    class config{
        private static $nombre;

        public static function setNombre(string $nombre){ $this -> nombre = $nombre; }

        public static function getNombre():string{ return $this->nombre; }

        private function __construct(){}

        public static function singleton(){
            if(!isset(self::$nombre)){
                self::$nombre = new config();
            }
            return self::$nombre;
       }
    }

    $user1=config::singleton();
    $user1=config::singleton() -> setNombre("Hola");
    $user1=config::singleton() -> getNombre();

    echo $user1=config::singleton() -> getNombre();
?>