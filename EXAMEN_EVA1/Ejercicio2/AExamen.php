<?php
    abstract class AExamen implements IExamen{
        use TieneFecha;
        private string $nombre;

        public function intentar(string $nombre){
            $this->nombre=$nombre;
        }

        abstract function ObtenerNota():int;
    }    
?>