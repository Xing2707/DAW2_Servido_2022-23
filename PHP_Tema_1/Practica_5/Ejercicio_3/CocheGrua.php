<?php
    require('cocheconRemolque.php');
    

    class cocheGrua extends coche{
        private $cocheCargado;

    public function Cargar(object $valor){
        $this -> cocheCargado = $valor -> pintarInformacion(); 
    }

    public function Decargar(){
        $this -> cocheCargado = $valor -> pintarInformacion();
    }

    public function pintarInformacion(){
        if($this -> cocheCargado == null){
            return print(parent :: pintarInformacion(). "<br> no lleva ningun coche");
        }else{
            return print(parent :: pintarInformacion(). "<br> Lleva ".$this -> cocheCargado."<br>------------------------------------------------<br>");
        }
    }
    }
    // $coche2=new coche;
    // $coche2 -> setMatricula("xx012s4");
    // $coche2 -> setMarca("tullfuss");
    // $coche2 -> setCarga(150.5);
    // print("<br>");

    // $coche3=new cocheGrua;
    // $coche3 -> setMatricula("11sssx");
    // $coche3 -> setMarca("XXXWWW");
    // $coche3 -> setCarga(100);
    // $coche3 -> Cargar($coche2);
    // $coche3 -> pintarInformacion();

?>