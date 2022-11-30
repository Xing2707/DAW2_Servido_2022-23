<?php
    class ExamenFacil extends AExamen{
        function ObtenerNota():int{
            return mt_rand(5,10);
        }
    }
?>