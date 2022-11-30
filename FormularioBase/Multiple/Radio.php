<?php
    namespace Multiple;
    use \Comunes\CampoMultiple;
    class Radio extends CampoMultiple{
        private const tipoRadio="radio";

        public function __construct(
            string $nombre,
            array $id
        ){
            parent::__construct(self::tipoRadio,$nombre,$id);
        }

        public function pintar($valor){
            if(empty($valor)){
                array_walk($this->id,function($item,$key){
                    echo "<label for=$this->name> $item <input type='$this->type' name='$this->name' id='$item' value='$item'/></label>";
                });
            }elseif($this->validar($valor)){
                array_walk($this->id,function($item,$key,$data){
                    if($data==$item){
                    echo "<label for=$this->name> $item <input type='$this->type' name='$this->name' id='$item' value='$item' checked/></label>";
                    }else{
                    echo "<label for=$this->name> $item <input type='$this->type' name='$this->name' id='$item' value='$item'/></label>";
                    }
                },$valor[$this->name]);
            }else{
                array_walk($this->id,function($item,$key){
                    echo "<label for=$this->name> $item <input type='$this->type' name='$this->name' id='$item' value='$item'/></label>";
                });
                echo $this->error();
            }
        }

        public function validar(array $valor){
            if(array_key_exists($this->name,$valor) && $valor[$this->name]!=null){
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