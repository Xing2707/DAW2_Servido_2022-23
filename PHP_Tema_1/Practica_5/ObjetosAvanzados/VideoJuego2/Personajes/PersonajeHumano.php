<?php
    namespace Personajes;
    use \Comunes\InterfazPersonaje;
    class PersonajeHumano implements InterfazPersonaje{
        use \Comunes\Posicion;
        public function atacar():string { return "puñetazo"; }
        public function defender():string { return "bloqueo"; }
    }

?>