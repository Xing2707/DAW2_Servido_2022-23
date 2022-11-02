<?php 
class coche{
    private string $matricula;
    private string $marca;
    private float $carga;

    public function setMatricula(string $valor){
        $this -> matricula = $valor;
    }

    public function getMatricula():string {
        return $this -> matricula;
    }
//----------------------------------------------------
    public function setMarca(string $valor){
        $this -> marca = $valor;
    }

    public function getMarca():string {
        return $this -> marca;
    }
//----------------------------------------------------
    public function setCarga(float $valor){
        $this -> carga = $valor;
    }

    public function getCarga():float {
        return $this -> carga;
    }

    public function pintarInformacion(){
        return "coche: <br> Matricula: ".$this -> matricula."<br>Marca: ".$this -> marca."<br>Carga: ".$this -> carga;
    }
}

?>