<?php

class Texto extends General{
    private $nombre;
    private $maxLen;
    private $minLen;
    
    function __construct($nombre,$maxLen,$minLen){
        $this->nombre=$nombre;
        $this->maxLen=$maxLen;
        $this->minLen=$minLen;

    }

    public function setNombre($nombre){ $this->nombre = $nombre; }

    public function getNombre(){ return $this->nombre; }

    function crear($valor){
        if(empty($valor)){
            echo "$this->nombre <input type='text' maxLen='$this->maxLen' minlength='$this->minLen' name='$this->nombre'><br>";
        }else{
            if($this->comprobar($valor)){
                echo "$this->nombre <input type='text' maxLen='$this->maxLen' minlength='$this->minLen' name='$this->nombre' value='".$valor[$this->nombre]."'><br>";
            }else{
                echo "$this->nombre <input type='text' maxLen='$this->maxLen' minlength='$this->minLen' name='$this->nombre'><br>";
                echo $this->error();

            }
        }
    }

    function comprobar($array){
        if(!empty($array[$this->nombre])){
            if(preg_match("/[a-z][A-Z]*/",$array[$this->nombre])){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    function error(){
        return "<p>Error deben introducir $this->nombre </p>";
    }
}
?>
