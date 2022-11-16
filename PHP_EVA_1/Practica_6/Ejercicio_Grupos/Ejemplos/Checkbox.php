<?php
    define("Privado","Hobby");
    class checkbox{
        private array $hobby=[];
    
        function validar( array $valor){
            if(array_key_exists(Privado,$valor)){
                return true;
            }else{
                return false;
            }
        }

        function setHobby( array $valor){
            foreach($valor as $var){
                array_push($this->hobby,$var);
            }
        }

        function getHobby(){
            $cadena;
            foreach($this->hobby as $valor){
                $cadena.=($valor." , ");
            }
            return $cadena;
        }

        function error(){
            return "Error deben selecionar al menos un tipo de hobby";
        }
    }
?>