<?php
    namespace Especial;
    use \Comunes\CampoEspecial;
    class TextArea extends CampoEspecial{
        private int $rows;
        private int $cols;
        private const minlenght=20;
        private const maxlenght=300;
        private const TipoTextoArea="textarea";

        //Constructor de clase texto
        public function __construct(
            string $nombre,
            string $placeholder,
            int $rows,
            int $cols,
            string $id=""
        ){
            parent:: __construct(self::TipoTextoArea,$nombre,$id);
            $this->placeholder=$placeholder;
            $this->rows=$rows;
            $this->cols=$cols;
        }

        public function pintar(array $valor){
            if(empty($valor)){
                return parent::pintar($valor)."placeholder='$this->placeholder' rows='$this->rows' cols='$this->cols'></textarea></label>";
            }elseif($this->validar($valor)){
                return parent::pintar($valor)."placeholder='$this->placeholder' rows='$this->rows' cols='$this->cols'>".$valor[$this->name]."</textarea></label>";
            }else{
                return parent::pintar($valor)."placeholder='$this->placeholder' rows='$this->rows' cols='$this->cols'>".$valor[$this->name]."</textarea></label>".$this->error();
            }
        }
        
        public function validar(array $valor){
            if($valor[$this->name]!=null){
                if(strlen($valor[$this->name])>=self::minlenght && strlen($valor[$this->name])<=self::maxlenght){
                    return true;
                }else{
                    return false;
                }
            }
        }

        public function error(){
            return "<p>Error Deben Introducir ". $this->getName()."</p>";
        }

    }
?>