<?php

class circulos{
    private const pi =M_PI;
    private $radio;
    private $area;

    public function setRadio(int $valor){
        $this -> radio=$valor;
    }

    public function getRadio(){
        return $this -> radio;
    }

    public function setArea(int $valor){
        $this -> area=$valor;
    }

    public function getArea(){
        return $this -> area;
    }

    public function mostrarPi(){
        return self :: pi;
    }
}
?>