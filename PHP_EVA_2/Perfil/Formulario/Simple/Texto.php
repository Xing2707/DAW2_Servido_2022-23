<?php
    namespace Simple;
    use \Comunes\CampoSimple;
    class Texto extends CampoSimple{
        private string $placeholder;
        private string $patter;
        private int $maxlen;
        private int $minlen;
        private const TipoTexto="text";

        //Constructor de clase texto
        public function __construct(
            string $nombre,
            string $placeholder,
            int $minlen,
            int $maxlen,
            int $size=10,
            string $id="",
            string $patter=""
        ){
            
            parent:: __construct(self::TipoTexto,$nombre,$size,$id);
            $this->placeholder=$placeholder;
            $this->minlen=$minlen;
            $this->maxlen=$maxlen;
            $this->patter=$patter;
        }

        public function pintar(array $valor){
            if(empty($valor)){
                return parent::pintar($valor)."placeholder='$this->placeholder' minlength='$this->minlen' maxlength='$this->maxlen' size='$this->size'/></label>";
            }elseif($this->validar($valor)){
                return parent::pintar($valor)."placeholder='$this->placeholder' minlength='$this->minlen' maxlength='$this->maxlen' size='$this->size' value='".$valor[str_replace(" ","_",$this->name)]."'/> </label>";
            }else{
                return parent::pintar($valor)."placeholder='$this->placeholder' minlength='$this->minlen' maxlength='$this->maxlen' size='$this->size'/></label>".$this->error();
            }
        }
        
        public function validar(array $valor){
            if(!empty($this->patter)){
                if($valor[str_replace(" ","_",$this->name)]!=null && preg_match($this->patter,$valor[str_replace(" ","_",$this->name)])){
                    if(strlen($valor[str_replace(" ","_",$this->name)])>$this->minlen && strlen($valor[str_replace(" ","_",$this->name)])<$this->maxlen){
                        return true;
                    }else{
                        return false;
                    }
                }
            }elseif($valor[str_replace(" ","_",$this->name)]!=null){
                if(strlen($valor[str_replace(" ","_",$this->name)])>=$this->minlen && strlen($valor[str_replace(" ","_",$this->name)])<=$this->maxlen){
                    return true;
                }else{
                    return false;
                }
            }
        }

        public function error(){
            return "<p class='error'>Error Deben Introducir ". $this->getName()."</p>";
        }

    }
?>