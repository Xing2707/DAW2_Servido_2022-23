<?php
    trait descripcion {
        private string $descripcion;
        public function getDescripcion(){ return $this->descripcion; }
        public function setDescripcion($descripcion){ $this->descripcion = $descripcion; }
    }
    class Edificio{
        use descripcion;
        private int $altura;

        public function getAltura():int { return $altura; }

    }
?>