<?php
require_once('Validad.php');

class Radio extends Validad{

    private $sexo =['HOMBRE','MUJER','OTRO'];
    private $nombre="sexo";

    function crear($dato){
        if(empty($data)){
            array_walk(
                $this->$this->sexo,
                function($op, $k){
                    echo "$op<input type='radio' name='$this->nombre' value='$op' id='$op'/>&nbsp;";
                });
        }else{
            if($this->comprobar($dato,$this->nombre)){
                array_walk(
                    $this->sexo,
                    function($op, $k, $data){
                        
                        if(($op == $data)){
                            echo "$op<input type='radio' name='$this->nombre' value='$op' id='$op' checked/>&nbsp;";
                        }else{
                            echo "$op<input type='radio' name='$this->nombre' value='$op' id='$op'/>&nbsp;";
                        }
                    },$dato);
            }else{
                array_walk(
                    $this->$this->sexo,
                    function($op, $k){
                        echo "$op<input type='radio' name='$this->nombre' value='$op' id='$op'/>&nbsp;";
                    });
                $this->error();
            }

        }
    }

    function comprobar($array,$nombre){
        if(array_key_exists($nombre,$array)){
            return true;
        }else{
            return false;
        }
    }

    function error(){
        return "Error deben seleccionar un opcion de radio";
    }
}
?>