<?php
    class CuentaBancaria{
        public static int $numerocuenta = 100001;
        private string $nombre;
        private float $saldo;

        public function __construct(
            $nombre='anonimo',
            $saldo=0
        ){
            $this -> numerocuenta = self :: $numerocuenta++;
            $this -> nombre = $nombre;
            $this -> saldo = $saldo;
        }

        public function ingresar(float $valor){
            $this -> saldo += $valor;
        }

        public function retirar(float $valor){
            $this -> saldo-=$valor;
        }

        public function saldo():float {
            return $this -> saldo;
        }

        public function transferirA(object $cuenta,float $cantidad){
            $this -> saldo -=$cantidad;
            $cuenta -> saldo += $cantidad;
        }

        public function unirCon(object $cuenta){
            $this->saldo += $cuenta -> saldo;
            $cuenta -> saldo=0;
            $cuenta -> nombre ="No es Util";
            $cuenta -> numerocuenta--;
        }

        public function bancarrota(){
            $this -> saldo =0;
        }

        public function mostrar(){
            echo "<div>
                <span> cuenta: ".$this -> numerocuenta." </span>
                <span> Nombre: ".$this -> nombre." </span>
                <span> saldo: ".$this -> saldo." </span>    
            </div>";
        }

    }
?>