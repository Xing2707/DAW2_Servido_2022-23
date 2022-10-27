<?php
    require_once("InterfazPersonaje.php");
    abstract class PersonajeMago implements AccionPersonaje{
        public function defender():string { return "hechizo protector"; }
        abstract public function atacar():string ;
    }
?>