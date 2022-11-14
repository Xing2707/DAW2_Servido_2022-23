<?php
require_once('Validad.php');

class Select extends Validad{

    private $array = [];
    private $seleccionado;

    function crear($array){
        array_walk(
            $array,
            function($op, $k,$seleccionado){
                if(){

                }
                echo "<option value='".$op+1."'>$op</option>";
            }
        ),$seleccionado;
    }

    function comprobar($seleccionado){
        if($seleccionado != " "){
            return true;
        }else{
            return false;
        }
    }
}
?>