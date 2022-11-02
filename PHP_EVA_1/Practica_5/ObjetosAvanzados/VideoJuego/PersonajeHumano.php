<?php
    //namespace Juego;
    require_once("IntefazPersonaje.php");
    require_once("Posicion.php");

    class PersonajeHumano implements AccionPersonaje{
        use Posicion;
        public function atacar():string { return "puñetazo"; }
        public function defender():string { return "bloqueo"; }
    }

?>