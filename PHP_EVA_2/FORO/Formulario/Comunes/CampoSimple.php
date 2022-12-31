<?php
    namespace Comunes;
    abstract class CampoSimple extends Campos{
        protected string $id;
        protected int $size;

        //Constructor de Clase input
        public function __construct(string $tipo,string $nombre,int $size,string $id,string $valor=""){
            $this->type=$tipo;
            $this->name=$nombre;
            $this->size=$size;
            $this->id=$id;
            $this->value=$valor;
        }
        //Genera Getter && Setter
        public function getId(){ return $this->id;}
        public function setId($id){ $this->id = $id; return $this;}

        //funcion pintar
        public function pintar(array $valor){
            return "<label for='$this->name'> $this->name <input type='$this->type' name='".str_replace(" ","_",$this->name)."' id='$this->id'";
        }

        //funcion abstracta
        abstract public function validar(array $valor);
        abstract public function error();
    }
?>