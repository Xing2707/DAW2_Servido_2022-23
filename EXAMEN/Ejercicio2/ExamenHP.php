<?php
    class ExamenHP extends AExamen{
        function ObtenerNota():int{
            return mt_rand(3,4);
        }
    }
?>