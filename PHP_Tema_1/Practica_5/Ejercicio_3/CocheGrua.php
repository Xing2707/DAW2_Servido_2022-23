<?php
    

    class cocheGrua extends coche{
        private object $cocheCargado;

    public function Cargar(object $valor){
        $this -> cocheCargado = $valor; 
    }

    public function Decargar(){
        $this -> cocheCargado = null;
    }

    public function pintarInformacion(){
        if($this -> cocheCargado == null){
            return parent :: pintarInformacion(). "<br> no lleva ningun coche";
        }else{
            return parent :: pintarInformacion(). "<br> Lleva ".$this -> cocheCargado -> pintarInformacion()."<br>------------------------------------------------<br>";
        }
    }
    }
?>