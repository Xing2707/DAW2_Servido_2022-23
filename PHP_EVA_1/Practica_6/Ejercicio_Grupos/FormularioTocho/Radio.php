<?php

class Radio extends General{
    //clase radio extiende de clase abstracta,con dos variables
    private $array;
    private $nombre;

    //constructor
    function __construct($array,$nombre){
        $this->array=$array;
        $this->nombre=$nombre;
    }

    //Getter y Setter de nombre
    public function setNombre($nombre){ $this->nombre = $nombre; }

    public function getNombre(){ return $this->nombre; }

    function crear($dato){
        //si el post esta vacio hacemos un array walk pasando por cada posicion del array para crearlos por defecto colocando como nombre variable nombre y como value el op que le pasamos a la funcion
        if(empty($dato)){
            array_walk(
                $this->array,
                function($op, $k){
                    echo "$op<input type='radio' name='$this->nombre' id='$op' value='$op'>&nbsp;";
                });
        }else{
             //si la funcion comprobar devuelve true hacemos un array walk donde le pasamos el array, como tercer parametro le pasamos el radio button seleccionado y en la funcion tambien se lo pasamos como $data, dentro de la funcion comparamos si el elemento del array original es igual que el que recibimos y si es igual lo pintamos otra vez pero como checked y si no lo pintamos por defecto
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
                //si la funcion comprobar devuelve false se generara por defecto y saltara el error
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
         //array_key_exist comprueba si existe la clave variable nombre que pasamos en este caso en el array del post
        if(array_key_exists($this->nombre,$array) && !empty($array[$this->nombre])){
            return true;
        }else{
            return false;
        }
    }


    //nos devuelve el error con varaible nombre de este clase
    function error(){
        return "<p>Error deben seleccionar un opcion de $this->nombre</p>";
    }
}
?>