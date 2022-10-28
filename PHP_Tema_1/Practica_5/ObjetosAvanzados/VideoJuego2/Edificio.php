<?php
//    namespace Juego;
    class Edificio{
        use Descripcion;
        use Posicion;
        private int $altura;

        public function setAltura(int $altura){ $this -> altura = $altura; }
        public function getAltura():int { return $this -> altura; }

    }

?>