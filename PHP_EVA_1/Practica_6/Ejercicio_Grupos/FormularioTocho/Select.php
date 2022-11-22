<?php

class Select extends General{
    //clase select extiende de clase abstracta,con dos variables
    private $array;
    private $nombre;
    
    //constructor
    function __construct($array,$nombre){
        $this->array=$array;
        $this->nombre=$nombre;
    }

    //Setter y Getter de nombre
    public function setNombre($nombre){ $this->nombre = $nombre; }

    public function getNombre(){ return $this->nombre; }

    function crear($valor){
         //si el post esta vacio se crea por defecto primero hacemos un echo de un select para hacer la estructura colocando el nombre y el id que usamos anteriormente luego hacemos un array walk para generar las distintas opciones del select pasando el array y dentro de la funcion un echo del option con el value con el op y el op dentro para que se vea y fuera del array walk un ultimo echo para cerrar el select
            if(empty($valor)){
                echo"<select name='$this->nombre' id='$this->nombre'>";
                    array_walk(
                        $this->array,function($op,$k){
                            echo"<option value='$op'>$op</option>";
                    });
                    echo"</select>";
            }else{
                if($this->comprobar($valor)){
                     //si el post no esta vacio llamamos a la funcion comprobar si devuelve true hacemos un array_shift para elimiar el primer elemento del array que es el hueco en blanco luego creamos la cabecera del select de forma normal y hacemos un arraywalk pasandole el array de provincias, como tercer parametro la provincia que recuperamos del post y en la funcion se lo pasamos tambien como $seleccionado y hacemos la comparacion si el seleccionado es distinto que el op se pinta por defecto si no se pinta con selected
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
                    //si la funcion comprobar devuelve false se pinta el select por defecto y se llama a la funcion de errors
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
        //comprueba si la key de array que nos devuelve es defenrente que espacio 
        if($valor[$this->nombre] !=" "){
            return true;
        }else{
            return false;
        }
    }
        //nos devuelve el error con varaible nombre de este clase
    function error(){
        return "<p>Error deben Seleccionar una $this->nombre</p>";
    }
}
?>
