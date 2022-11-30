<?php
namespace Multiple;
use \Comunes\CampoMultiple;
class Select extends CampoMultiple{
    private const tipoSelect="select";

    public function __construct(
        string $nombre,
        array $array
    ){
        parent::__construct(self::tipoSelect,$nombre,$array);
    }
    public function SiguienteTurno(){ return true;}

    public function pintar($valor){
        if(empty($valor)){
            echo"<select name='$this->name' id='$this->name'>";
                array_walk(
                    $this->id,function($op,$k){
                        echo"<option value='$op'>$op</option>";
                });
                echo"</select>";
        }else{
            if($this->validar($valor)){
                if($this->SiguienteTurno){
                    array_shift($this->id);
                    echo"<select name='$this->name' id='$this->name'>";
                        array_walk($this->id,function($op,$k,$seleccionado){
                            if($seleccionado!=$op){
                                echo "<option value='$op'>$op</option>";
                            }else{
                                echo "<option value='$op' selected>$op</option>";
                            }
                        },$valor[$this->name]);
                    echo"</select>";
                }else{
                    array_shift($this->id);
                    echo"<select name='$this->name' id='$this->name'>";
                        array_walk($this->id,function($op,$k,$seleccionado){
                            if($seleccionado==$op){
                                echo "<option value='$op'>$op</option>";
                            }else{
                                echo "<option value='$op' selected>$op</option>";
                            }
                        },$valor[$this->name]);
                    echo"</select>";
                }
            }else{
                echo"<select name='$this->name' id='$this->name'>";
                array_walk($this->id,function($op,$k){
                    print("<option value='$op'>$op</option>");
                });
                echo"</select>";
                echo $this->error();
            }
        }
    }
    
    public function validar(array $valor){
        if(array_key_exists($this->name,$valor) && $valor[$this->name]!=null){
                if($valor[$this->name]==" "){
                    return false;
                }
                if(in_array($valor[$this->name],$this->id)){
                    return true;
                }else{ return false; }
        }else{
            return false;
        }
    }

    public function error(){
        return "<p>Error Deben Seleccionar una ". $this->getName()."</p>";
    }

}
?>