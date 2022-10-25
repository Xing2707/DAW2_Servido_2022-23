<?php
    class UsuarioPremium extends Usuario{
        private const victoria =3;

        public function __construct(
        string $nombre,
        string $apellido,
        string $deporte){
            parent:: __construct($nombre.="(Admin)",$apellido,$deporte);
        }
    }
?>