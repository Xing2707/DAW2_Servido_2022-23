<?php
 class Objeto{
    use Descripcion;
    use Posicion;
    private int $peso;
    public function setPeso(int $peso){ $this -> peso =$peso; }
    public function getPeso():int { return $this -> peso; }
}
?>