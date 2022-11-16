<?php
    class Textarea{
        private String $descripcion;

        function validar(string $valor){
            if(empty($valor)){
                return false;
            }else{
                return true;
            }
        }

        function setDescripcion(string $valor){
            $this -> descripcion = $valor;
        }

        function getDescripcion():string{
            return $this->descripcion;
        }

        function error(){
            return "Error Deben Introducir algo sobre ti";
        }
    }
?>