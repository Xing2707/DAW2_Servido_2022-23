<?php 
    namespace Personajes;
    class MagoBlanco extends PersonajeMago{
        use Posicion;
        public function atacar() { return "ataque de sombra"; }
    }
?>