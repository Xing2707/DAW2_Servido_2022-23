<?php
    require_once("InterfazPlataformaPago.php");
    class BancoMaloMalisimo implements PlataformaPago{
        private bool $conexion;
        private bool $seguridad;
        private string $cuenta;
        private int $cantidad;
    
        //Getter y Setter
        public function setConexion(bool $conexion) { $this->conexion = $conexion;}
        public function setSeguridad(bool $seguridad){ $this->seguridad = $seguridad;}
        public function setCuenta(string $cuenta){ $this->cuenta = $cuenta;}
        public function getCuenta():string {return $this ->cuenta;}
        public function setCantidad(int $cantidad){ $this->cantidad = $cantidad;}
        public function getCantidad():int {return $this ->cantidad;}
    
    
        public function estableceConexion():bool{
            return $this -> conexion;
           
        }
    
        public function compruebaSeguridad():bool{
            return $this -> seguridad;
        }
    
        public function pagar(string $cuenta, int $cantidad){
            return $this -> cuenta." realiza pago de: ". $this -> cantidad;
        }
    }
?>