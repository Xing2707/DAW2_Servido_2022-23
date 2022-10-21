<?php
    
    class cocheConRemolque extends coche {
        private float $capacidad;

        public function setCapacidad(float $valor){
            $this -> capacidad = $valor;
        }

        public function getCapacidad() :float {
            return $this -> capacidad;
        }
//-----------------------------------------------------------
        
        public function pintarInformacion(){
            return parent ::pintarInformacion(). "<br>Remolque: ".$this-> capacidad."<br>-----------------------------------------------<br>"; 
        }
    }
?>

