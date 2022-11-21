<?php

class Numero extends General{

    private $nombre;
    private $max;
    private $min;
    private $size;

    function __construct($nombre,$max,$min,$size){
        $this->nombre=$nombre;
        $this->max=$max;
        $this->min=$min;
        $this->size=$size;
    }

    public function setNombre($nombre){ $this->nombre = $nombre; }

    public function getNombre(){ return $this->nombre; }

    function crear($valor){
        if(empty($valor)){
            echo "$this->nombre <input type='number' size='$this->size' max='$this->max' min='$this->min' name='$this->nombre'>";
        }else{
            if($this->comprobar($valor)){
                echo "$this->nombre <input type='number' size='$this->size' max='$this->max' min='$this->min' name='$this->nombre' value='".$valor[$this->nombre]."'>";
            }else{
                echo "$this->nombre <input type='number' size='$this->size' max='$this->max' min='$this->min' name='$this->nombre'>";
                echo $this->error();
            }
        }
    }

    function comprobar($array){
        if(!empty($array[$this->nombre])){
            return true;
        }else{
            return false;
        }
    }

    function error(){
        return "<p>Error deben introducir $this->nombre </p>";
    }
}
?>