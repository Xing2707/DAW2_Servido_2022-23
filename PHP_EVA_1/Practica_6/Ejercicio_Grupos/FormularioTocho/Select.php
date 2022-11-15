<?php
require_once('Validad.php');
require_once('Errores.php');

class Select extends Validad{

    private $array = [" ","MADRID","BARCELONA","VALENCIA","MURCIA","SEVILLA"];
    private $error;

    function crear($valor){
        $this->error=new Errores();
            if(empty($valor)){
                echo"<select name='provincias' id='provincias'>";
                    array_walk(
                        $this->array,function($op,$k){
                            echo "<option value='$op'>$op</option>";
                    });
                echo"</select>";
            }
            if($this->comprobar($valor)){
                array_shift($this->array);
                echo"<select name='provincias' id='provincias'>";
                    array_walk($this->array,function($op,$k,$seleccionado){
                        if($seleccionado!=$op){
                            echo "<option value='$op'>$op</option>";
                        }else{
                            echo "<option value='$op' selected>$op</option>";
                        }
                    },$valor);
                echo"</select>";
            }else{
                array_walk($this->array,function($op,$k){
                    echo "<option value='$op'>$op</option>";
                });

                echo$this->error->ErrorSelect();
            }
    }

    function comprobar($valor){
        if($valor != " "){
            return true;
        }else{
            return false;
        }
    }
}
?>
