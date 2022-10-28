<?php 
    namespace Personajes;
    // require_once("PersonajeMago.php");
    class MagoBlanco extends PersonajeMago{
        use Posicion;
        public function atacar() { return "ataque de luz"; }
    }
?>