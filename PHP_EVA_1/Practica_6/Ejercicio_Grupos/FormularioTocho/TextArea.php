<?php

class TextArea extends General{

    private $nombre;
    private $placehol;
    private $row;
    private $cols;

    function __construct($nombre,$placehol,$row,$cols){
        $this->nombre=$nombre;
        $this->placehol=$placehol;
        $this->row=$row;
        $this->cols=$cols;
    }

    public function setNombre($nombre){ $this->nombre = $nombre; }

    public function getNombre(){ return $this->nombre; }

    function crear($valor){
            if(empty($valor)){
                echo "<textarea placeholder='$this->placehol' rows='$this->row' cols='$this->cols' name='$this->nombre'></textarea>";
            }else{
                if($this->comprobar($valor)){
                    echo "<textarea placeholder='$this->placehol' rows='$this->row' cols='$this->cols' name='$this->nombre'>".$valor[$this->nombre]."</textarea>";
                }else{
                    echo "<textarea placeholder='$this->placehol' rows='$this->row' cols='$this->cols' name='$this->nombre'></textarea>";
                    echo $this->error();
                }
            }
        
    }

    function comprobar($valor){
        if(!empty($valor[$this->nombre])){
            return true;
        }else{
            return false;
        }
    }

    function error(){
        return "<p>Error $this->placehol</p>";
    }
}
?>