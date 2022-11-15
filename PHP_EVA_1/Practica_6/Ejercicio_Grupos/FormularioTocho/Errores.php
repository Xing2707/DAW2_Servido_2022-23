<?php
    class Errores{
        public function ErrorTexto(){
            return "Error deben Introducir algun texto";
        }

        public function ErrorNumero(){
            return "Error deben Introducir algun Numero";
        }
        public function ErrorSelect(){
            return "Error deben Seleccionar un opcion";
        }
        public function ErrorRadio(){
            return "Error deben Seleccionar un radio";
        }
        public function ErrorCheckBox(){
            return "Error deben Seleccionar un CheckBox al menos";
        }
    }
?>