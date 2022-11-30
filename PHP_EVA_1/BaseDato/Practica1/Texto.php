<?php

class Texto extends General{
    //clase texto extiende de clase abstracta,con tres variables
    private $nombre;
    private $maxLen;
    private $minLen;
    
    //Constructor
    function __construct($nombre,$maxLen,$minLen){
        $this->nombre=$nombre;
        $this->maxLen=$maxLen;
        $this->minLen=$minLen;

    }

    //Setter y Getter de nombre
    public function setNombre($nombre){ $this->nombre = $nombre; }

    public function getNombre(){ return $this->nombre; }

    function crear($valor){
        //si el post esta vacio crea el input por defecto.
        if(empty($valor)){
            echo "$this->nombre <input type='text' maxLen='$this->maxLen' minlength='$this->minLen' name='$this->nombre'><br>";
        }else{
            //llamamos a la funciion comprobar si esta devuelve true se pinta con el valor
            if($this->comprobar($valor)){
                echo "$this->nombre <input type='text' maxLen='$this->maxLen' minlength='$this->minLen' name='$this->nombre' value='".$valor[$this->nombre]."'><br>";
            }else{
                //si hay un error se pint por defecto con el error
                echo "$this->nombre <input type='text' maxLen='$this->maxLen' minlength='$this->minLen' name='$this->nombre'><br>";
                echo $this->error();

            }
        }
    }

    function comprobar($array){
         //verifica si esa key esta vacia
        if(!empty($array[$this->nombre])){
            //Cmprueba paramentro pasado con expresion regular,deben ser caracter de a hasta z sea mayusculo o minuscula.
            if(preg_match("/[a-z][A-Z]*/",$array[$this->nombre])){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    //nos devuelve el error con varaible nombre de este clase
    function error(){
        return "<p>Error deben introducir $this->nombre </p>";
    }
}
?>
