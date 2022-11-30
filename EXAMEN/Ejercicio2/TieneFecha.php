<?php
    trait TieneFecha{
        public $fecha;

        function getFecha(){
            return $this->fecha;
        }
        function setFecha(string $fecha){
            $this->fecha=$fecha;
        }
    }
?>