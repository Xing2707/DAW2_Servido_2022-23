<?php
    namespace Comunes;
    abstract class CampoMultiple extends Campos{
        protected array $elementos;

        //constructor
        public function __construct(string $tipo,string $nombre,array $elementos,string $valor=""){
            $this->type=$tipo;
            $this->name=$nombre;
            $this->elementos=$elementos;
            $this->value=$valor;
        }
        //Getter y Setter
        public function getElementos(){return $this->elementos;}
        public function setElementos(array $elementos){$this->elementos=$elementos;}

        //funcion abstractor.
        abstract public function pintar(array $valor);
        abstract public function validar(array $valor);
        abstract public function error();
    }
?>