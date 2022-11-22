<?php

class TextArea extends General{
    //clase textarea extiende de clase abstracta,con cuatros variables
    private $nombre;
    private $placehol;
    private $row;
    private $cols;

    //constructor
    function __construct($nombre,$placehol,$row,$cols){
        $this->nombre=$nombre;
        $this->placehol=$placehol;
        $this->row=$row;
        $this->cols=$cols;
    }

    //Setter y Getter de nombre
    public function setNombre($nombre){ $this->nombre = $nombre; }

    public function getNombre(){ return $this->nombre; }

    function crear($valor){
            //si el post esta vacio se crea por defecto 
            if(empty($valor)){
                echo "<textarea placeholder='$this->placehol' rows='$this->row' cols='$this->cols' name='$this->nombre'></textarea>";
            }else{
                //se llama a la funcion comprobar si devuelve true se pinta con el valor que se le ha pasado a la funcion
                if($this->comprobar($valor)){
                    echo "<textarea placeholder='$this->placehol' rows='$this->row' cols='$this->cols' name='$this->nombre'>".$valor[$this->nombre]."</textarea>";
                }else{
                    //si devuelve false se pinta por defecto y devuelve un error
                    echo "<textarea placeholder='$this->placehol' rows='$this->row' cols='$this->cols' name='$this->nombre'></textarea>";
                    echo $this->error();
                }
            }
        
    }

    function comprobar($valor){
        // comprueba si la key de post que nos devuelve no esta vacio 
        if(!empty($valor[$this->nombre])){
            return true;
        }else{
            return false;
        }
    }

    //nos devuelve el error con varaible placehol de este clase
    function error(){
        return "<p>Error $this->placehol</p>";
    }
}
?>