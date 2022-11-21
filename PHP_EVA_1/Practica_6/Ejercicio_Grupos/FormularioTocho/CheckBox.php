<?php

class CheckBox extends General{

    private $array;
    private $nombre;
    private $cadenas;
    
    function __construct($array,$nombre){
        $this->array=$array;
        $this->nombre=$nombre."[]";

    }

    function setCadenas($array){
        foreach($array as $valor){
            $this->cadenas.=$valor.",";
        }
    }
    function getCadenas(){return $this->cadenas;}

    function SetNombre($nombre){$this->nombre=$nombre;}

    function getNombre(){return substr($this->nombre,0,strlen($this->nombre)-2);}


    function crear($arrayEnviado){
        if(empty($arrayEnviado)){
            array_walk(
                $this->array,
                function($op, $k){
                    echo "$op<input type='checkbox' value='$op' name='$this->nombre' >&nbsp;";
                }
            );
        }else{
            if($this->comprobar($arrayEnviado)){
                array_walk(
                    $this->array,
                    function($op, $k, $data){
                        if(in_array($op, $data)){
                            echo "$op<input type='checkbox' value='$op' name='$this->nombre' checked >&nbsp;";
                        }else{
                            echo "$op<input type='checkbox' value='$op' name='$this->nombre'>&nbsp;";
                        }
                    },$arrayEnviado["Hobbies"]);
            }else{
                array_walk(
                    $this->array,
                    function($op, $k){
                        echo "$op<input type='checkbox' value='$op' name='$this->nombre' >&nbsp;";
                    }
                );
                echo $this->error();
            }
        }
    }

    function comprobar($array){
        if(array_key_exists($this->getNombre(),$array) && !empty($array[$this->getNombre()])){
            return true;
        }else{
            return false;
        }
    }

    function error(){
        return"<p>Error Deben Seleccionar al menos una".$this->getNombre()."</p>";
    }
}
?>