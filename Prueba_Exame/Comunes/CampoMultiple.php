<?php
    namespace Comunes;
    abstract class CampoMultiple extends Campos{
        protected array $elementos;

        //constructor
        public function __construct(string $tipo,string $nombre,array $id,string $valor=""){
            $this->type=$tipo;
            $this->name=$nombre;
            $this->id=$id;
            $this->value=$valor;
        }
        //Getter y Setter
        protected function getId(){return $this->id;}
        protected function setId(array $id){$this->id=$id;}

        //funcion abstractor.
        abstract public function pintar(array $valor);
        abstract public function validar(array $valor);
        abstract public function error();
    }
?>