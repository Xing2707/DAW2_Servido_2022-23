<?php
    namespace Personajes;
    abstract class PersonajeMago implements IntefazPersonaje{
        public function defender():string { return "hechizo protector"; }
        abstract public function atacar():string ;
    }
?>