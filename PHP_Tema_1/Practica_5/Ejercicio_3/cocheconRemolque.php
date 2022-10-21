<?php
    require('Coche.php');
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
            return print(parent ::pintarInformacion(). "<br>Remolque: ".$this-> capacidad."<br>-----------------------------------------------<br>"); 
        }
    }

    $coche1=new cocheConRemolque;
    $coche1 -> setMatricula("1x0h2s4");
    $coche1 -> setMarca("fulltool");
    $coche1 -> setCarga(200);
    $coche1 -> setCapacidad(100);
    $coche1 -> pintarInformacion();
?>

