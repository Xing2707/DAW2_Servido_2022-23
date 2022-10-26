<?php
    class UsuarioAdministrador extends Usuario{

        public function __construct(
        string $nombre,
        string $apellido,
        string $deporte){
            parent:: __construct($nombre.="(Admin)",$apellido,$deporte){
                $this -> victoria=3
            };
        }

        public function introducirResultado(string $valor){
            parent :: introducirResultado($valor,self::victoria);

        }
    }
?>