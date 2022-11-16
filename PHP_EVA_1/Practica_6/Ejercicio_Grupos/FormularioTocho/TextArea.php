<?php
require_once('Validad.php');

class TextArea extends Validad{

    private $nombre="Descripcion";

    function crear($valor){
            // if(empty($valor)){
                echo "<br><textarea placeholder='Escribe sobre el hobbie/s seleccionados u otro que te guste' rows='5' cols='50' name='$nombre'></textarea>";
            // }else{
            //     if($this->comprobar($valor,$this->nombre)){
            //         echo "<br><textarea placeholder='Escribe sobre el hobbie/s seleccionados u otro que te guste' rows='5' cols='50' name='$nombre'>$nombre</textarea>";
            //     }else{
            //         echo "<br><textarea placeholder='Escribe sobre el hobbie/s seleccionados u otro que te guste' rows='5' cols='50' name='$nombre'></textarea>";
            //         echo "<p>".$this->error()."</p>";
            //     }
            // }
        
    }

    function comprobar($valor,$nombre){
        if(array_key_exists($nombre,$valor) && $valor[$nombre] != " "){
            return true;
        }else{
            return false;
        }
    }

    function error(){
        return "Error deben escribir algo sobre ti";
    }
}
?>