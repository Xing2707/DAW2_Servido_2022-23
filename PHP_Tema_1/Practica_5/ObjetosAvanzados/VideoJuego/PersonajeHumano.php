<?php
    require_once("InterfazPersonaje.php");
    class PersonajeHumano implements AccionPersonaje{
        public function atacar():string { return "puñetazo"; }
        public function defender():string { return "bloqueo"; }
    }
?>