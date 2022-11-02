<?php
    class UsuarioPremium extends Usuario{

        public function __construct(
        string $nombre,
        string $apellido,
        string $deporte){
            parent:: __construct($nombre.="(premium)",$apellido,$deporte){
                $this -> victoria=3
            };
        }
        

    }
?>