<?php
    namespace Comunes;
    abstract class Campos{
        //variables
        protected string $type;
        protected string $name;
        protected string $value;

        //Getter y Setter
        protected function getType(){ return $this->type;}
        protected function setType($type){ $this->type = $type; return $this;}
        protected function getName(){ return $this->name;}
        protected function setName($name){ $this->name = $name; return $this;}
        protected function getValue(){ return $this->value;}
        protected function setValue($value){ $this->value = $value; return $this;}

        //funcione deben implementar
        abstract function pintar(array $valor);
        abstract function validar(array $valor);
    }
?>