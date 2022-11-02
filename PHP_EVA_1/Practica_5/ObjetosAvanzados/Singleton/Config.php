<?php

    class Config{
        private string $nombre;

        private static $instancia;
        public function setNombre(string $nombre){ $this -> nombre = $nombre; }

        public function getNombre():string{ return $this->nombre; }

        private function __construct(){}

        public static function singleton(){
            if(!isset(self::$instancia)){
                self::$instancia = new Config();
            }
            return self::$instancia;
       }
    }

    // $user1=Config::singleton();
    // $user1=Config::singleton() -> setNombre("Hola");
    // $user1=Config::singleton() -> getNombre();

    // $user2=Config::singleton();
    // $user3=Config::singleton();


    // echo $user1=Config::singleton() -> getNombre();
    // echo $user2=Config::singleton() -> getNombre();
    // echo $user3=Config::singleton() -> getNombre();
?>