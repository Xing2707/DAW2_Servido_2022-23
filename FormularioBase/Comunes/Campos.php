<?php
    namespace Comunes;
    abstract class Campos{
        //variables
        protected string $type;
        protected string $name;
        protected string $value;

        //Getter y Setter
        public function getType(){ return $this->type;}
        public function setType($type){ $this->type = $type; return $this;}
        public function getName(){ return $this->name;}
        public function setName($name){ $this->name = $name; return $this;}
        public function getValue(){ return $this->value;}
        public function setValue($value){ $this->value = $value; return $this;}

        //funcione deben implementar
        abstract function pintar(array $valor);
        abstract function validar(array $valor);
    }
?>