<?php
    // namespace Juego;
    require_once("IntefazPersonaje.php");
    abstract class PersonajeMago implements AccionPersonaje{
        public function defender():string { return "hechizo protector"; }
        abstract public function atacar():string ;
    }
?>