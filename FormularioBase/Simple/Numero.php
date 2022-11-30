<?php
    namespace Simple;
    use \Comunes\CampoSimple;
    class Numero extends CampoSimple{
        private int $max;
        private int $min;
        private const TipoNumero="number";

        //Constructor de clase Numero
        public function __construct(
            string $nombre,
            int $min,
            int $max,
            int $size=1,
            string $id=""
        ){
            parent:: __construct(self::TipoNumero,$nombre,$size,$id);
            $this->min=$min;
            $this->max=$max;
            $this->size=$size;
        }

        public function pintar(array $valor){
            if(empty($valor)){
                return parent::pintar($valor)." min='$this->min' max='$this->max' size='$this->size'/></label>";
            }elseif($this->validar($valor)){
                return parent::pintar($valor)." min='$this->min' max='$this->max' size='$this->size' value='".$valor[$this->getName()]."'/></label>";
            }else{
                return parent::pintar($valor)." min='$this->min' max='$this->max' size='$this->size'/></label>".$this->error();
            }
        }
        
        public function validar(array $valor){
            if($valor[$this->name]!=null && is_numeric($valor[$this->name])){
                if($valor[$this->name]>=$this->min && $valor[$this->name]<=$this->max){
                    return true;
                }else{return false;}
                return true;
            }else{
                return false;
            }
        }

        public function error(){
            return "<p>Error Deben Introducir ". $this->getName()."</p>";
        }

    }

?>