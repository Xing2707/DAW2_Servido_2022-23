<?php
require_once('Validad.php');

class Numero extends Validad{

    private $nombre;

    function crear($dato,$max,$min,$valor){
        $this->nombre=$dato;
        if(empty($valor)){
            echo "$dato <input type='number' size='1' max='$max' min='$min' name='$dato' value='' id='$dato'>";
        }else{
            if($this->comprobar($valor,$dato)){
                echo "$dato <input type='number' size='1' max='$max' min='$min' name='$dato' value='".$valor[$dato]."' id='$dato'>";
            }else{
                echo "$dato <input type='number' size='1' max='$max' min='$min' name='$dato' value='' id='$dato'>";
                echo $this->error();
            }
        }
    }

    function comprobar($array,$numero){
        if(array_key_exists($numero,$array) && !empty($array[$numero])){
            return true;
        }else{
            return false;
        }
    }

    function error(){
        return "<p>Error deben introducir $this->nombre </p>";
    }
}
?>