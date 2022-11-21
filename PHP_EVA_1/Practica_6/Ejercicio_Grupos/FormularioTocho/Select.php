<?php

class Select extends General{

    private $array;
    private $nombre;
    
    function __construct($array,$nombre){
        $this->array=$array;
        $this->nombre=$nombre;
    }

    public function setNombre($nombre){ $this->nombre = $nombre; }

    public function getNombre(){ return $this->nombre; }

    function crear($valor){
            if(empty($valor)){
                echo"<select name='$this->nombre' id='$this->nombre'>";
                    array_walk(
                        $this->array,function($op,$k){
                            echo"<option value='$op'>$op</option>";
                    });
                    echo"</select>";
            }else{
                if($this->comprobar($valor)){
                    array_shift($this->array);
                    echo"<select name='$this->nombre' id='$this->nombre'>";
                        array_walk($this->array,function($op,$k,$seleccionado){
                            if($seleccionado!=$op){
                                echo "<option value='$op'>$op</option>";
                            }else{
                                echo "<option value='$op' selected>$op</option>";
                            }
                        },$valor[$this->nombre]);
                    echo"</select>";
                }else{
                    echo"<select name='$this->nombre' id='$this->nombre'>";
                    array_walk($this->array,function($op,$k){
                        print("<option value='$op'>$op</option>");
                    });
                    echo"</select>";
                    echo $this->error();
                }
            }
    }

    function comprobar($valor){
        if($valor[$this->nombre] !=" "){
            return true;
        }else{
            return false;
        }
    }

    function error(){
        return "<p>Error deben Seleccionar un opcion</p>";
    }
}
?>
