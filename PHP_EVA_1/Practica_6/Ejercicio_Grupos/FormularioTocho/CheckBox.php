<?php

class CheckBox extends General{
    //clase checkbox extiende de clase abstracta,con tres variables

    private $array;
    private $nombre;
    private $cadenas;
    
    //Constructor de clase checkbox
    function __construct($array,$nombre){
        $this->array=$array;
        $this->nombre=$nombre."[]"; //concatena nombre con corchete para cuanto genera clase con solo ecribir nombre basta.

    }

    //Funcion setcadena sirver para convertir array a string concatenado con goma y guarda dentro de variable cadena.
    function setCadenas($array){
        foreach($array as $valor){
            $this->cadenas.=$valor.",";
        }
    }

    //Funcion getCadena devuelve variable cadena.
    function getCadenas(){return $this->cadenas;}

    //Funcion setNmbre
    function SetNombre($nombre){$this->nombre=$nombre;}

    //Funcion getNombre retorna nombre de posicion 0 hasta longitude de nombre -2 que son nombre sin corchete.
    function getNombre(){return substr($this->nombre,0,strlen($this->nombre)-2);}

    //Funcion crear
    function crear($arrayEnviado){
        //Si el parametro que me pasa esta vacio hago el primer pinto
        if(empty($arrayEnviado)){
            array_walk(
                $this->array,
                function($op, $k){
                    echo "$op<input type='checkbox' value='$op' name='$this->nombre' >&nbsp;";
                }
            );
        }else{
            //sino comprubar con funcion comprobar.
            if($this->comprobar($arrayEnviado)){
                //Si es true pinto input de checkbox seleccionado y no seleccionado con array_walk.
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
                //Si es false pinto input de checkbox con error llamando funcion error.
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

    //Funcion comprobar
    function comprobar($array){
        //comprueba el paramentro pasado usando array_key_exists para buscar si el parametro de array tiene el clave como nombre de checkbox y si dentro de ese clave no esta vacio.
        if(array_key_exists($this->getNombre(),$array) && !empty($array[$this->getNombre()])){
            return true;
        }else{
            return false;
        }
    }

    //Funcion error retorna error con varaible nombre de este clase.
    function error(){
        return"<p>Error Deben Seleccionar al menos una".$this->getNombre()."</p>";
    }
}
?>