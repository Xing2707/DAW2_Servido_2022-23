<?php

class Numero extends General{
    //clase numero extiende de clase abstracta,con cuatros variables
    private $nombre;
    private $max;
    private $min;
    private $size;

    //Constructor
    function __construct($nombre,$max,$min,$size){
        $this->nombre=$nombre;
        $this->max=$max;
        $this->min=$min;
        $this->size=$size;
    }

    //Setter y Getter de nombre
    public function setNombre($nombre){ $this->nombre = $nombre; }

    public function getNombre(){ return $this->nombre; }

    //Funcion crear
    function crear($valor){
        //si $valor que es el post esta vacio lo crea por defecto por que no se ha enviado ninguna vez
        if(empty($valor)){
            echo "$this->nombre <input type='number' size='$this->size' max='$this->max' min='$this->min' name='$this->nombre'>";
        }else{
            //si la funcion comprobar devuelve true se coloca en el value el valor que le hemos pasado
            if($this->comprobar($valor)){
                echo "$this->nombre <input type='number' size='$this->size' max='$this->max' min='$this->min' name='$this->nombre' value='".$valor[$this->nombre]."'>";
            }else{
                //si la funcion comprobar devuelve false salta el error y lo crea por defecto
                echo "$this->nombre <input type='number' size='$this->size' max='$this->max' min='$this->min' name='$this->nombre'>";
                //llamamos aqui a la funcion error
                echo $this->error();
            }
        }
    }

    function comprobar($array){
        //comprueba si dentro array en el posicion de clave que nos devuelve no esta vacio.
        if(!empty($array[$this->nombre])){
            return true;
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