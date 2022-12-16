<?php
    class ExamenChungo extends AExamen{
        function ObtenerNota():int{
            return mt_rand(0,7);
        }
    }
?>