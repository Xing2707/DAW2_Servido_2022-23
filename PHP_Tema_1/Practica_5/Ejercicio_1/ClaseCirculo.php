<?php

class circulos{
    private const pi =M_PI;
    private $radio;

    public function setRadio(float $valor){
        $this -> radio=$valor;
    }

    public function getRadio():float {
        return $this -> radio;
    }

    public function getArea(){
        return self :: pi * $this -> radio * $this -> radio;
    }

}
?>