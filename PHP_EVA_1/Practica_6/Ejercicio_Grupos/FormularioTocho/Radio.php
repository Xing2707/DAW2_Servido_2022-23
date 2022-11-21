<?php

class Radio extends General{

    private $array;
    private $nombre;

    function __construct($array,$nombre){
        $this->array=$array;
        $this->nombre=$nombre;
    }

    public function setNombre($nombre){ $this->nombre = $nombre; }

    public function getNombre(){ return $this->nombre; }

    function crear($dato){
        if(empty($dato)){
            array_walk(
                $this->array,
                function($op, $k){
                    echo "$op<input type='radio' name='$this->nombre' id='$op' value='$op'>&nbsp;";
                });
        }else{
            if($this->comprobar($dato)){
                array_walk(
                    $this->array,
                    function($op, $k, $data){
                        
                        if(($op == $data)){
                            echo "$op<input type='radio' name='$this->nombre' value='$op' id='$op' checked>&nbsp;";
                        }else{
                            echo "$op<input type='radio' name='$this->nombre' value='$op' id='$op'>&nbsp;";
                        }
                    },$dato[$this->nombre]);
            }else{
                array_walk(
                    $this->array,
                    function($op, $k){
                        echo "$op<input type='radio' name='$this->nombre' value='$op' id='$op'/>&nbsp;";
                    });
                    echo $this->error();
            }

        }
    }

    function comprobar($array){
        if(array_key_exists($this->nombre,$array) && !empty($array[$this->nombre])){
            return true;
        }else{
            return false;
        }
    }

    function error(){
        return "<p>Error deben seleccionar un opcion de $this->nombre</p>";
    }
}
?>