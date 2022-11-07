<?php
    define("Sex","Sexo");
    class Radio{
        private string $sexo;

        function validar(array $valor){
            if(array_key_exists(Sex,$valor)){
                return true;
            }else{
                return false;
            }
        }
        function setSexo(string $valor){
            $this->sexo=$valor;
        }

        function getSexo() :string {
            return $this->sexo;
        }

        function Error(){
            return "Error deben seleccionar un sexo";
        }
    }
?>