<?php
    namespace Multiple;
    use \Comunes\CampoMultiple;
    class Checkbox extends CampoMultiple{
        private const tipoCheck="checkbox";
        private string $cadena;

        public function __construct(
            string $nombre,
            array $id
        ){
            parent::__construct(self::tipoCheck,$nombre."[]",$id);
        }
        function getName(){return substr($this->name,0,strlen($this->name)-2);}

        public function pintar($valor){
            if(empty($valor)){
                array_walk($this->id,function($item,$key){
                    echo "<label for=".$this->getName().">$item <input type='$this->type' name='$this->name' id='$item' value='$item'/></label>";
                });
            }elseif($this->validar($valor)){
                array_walk($this->id,function($item,$key,$data){
                    if(in_array($item,$data)){
                    echo "<label for=".$this->getName().">$item <input type='$this->type' name='$this->name' id='$item' value='$item' checked/></label>";
                    }else{
                    echo "<label for=".$this->getName().">$item <input type='$this->type' name='$this->name' id='$item' value='$item'/></label>";
                    }
                },$valor[$this->getName()]);
            }else{
                array_walk($this->id,function($item,$key){
                    echo "<label for=".$this->getName().">$item <input type='$this->type' name='$this->name' id='$item' value='$item'/></label>";
                });
                echo $this->error();
            }
        }

        public function validar(array $valor){
            if(array_key_exists($this->getName(),$valor) && $valor[$this->getName()]!=null){
                foreach($valor[$this->getName()] as $valor2){
                    if(!in_array($valor2,$this->id)){
                        return false;
                    }
                }
                return true;
            }else{
                return false;
            }
        }

        public function error(){
            return "<p>Error Deben Seleccionar una ". $this->getName()."</p>";
        }

    }
?>