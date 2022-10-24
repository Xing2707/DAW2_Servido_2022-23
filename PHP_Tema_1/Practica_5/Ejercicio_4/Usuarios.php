<?php
    class Usuario{
        private string $nombre;
        private string $apellido;
        private string $deporte;
        private int $nivel;
        private array $partidos;
        private const victoria = 6;
        private int $acumuladorVictoria=0;
        private int $acumuladorDerrota=0;

        //Constructor
        public function __construct(
            string $nombre,
            string $apellido,
            string $deporte
        ){
            $this -> nombre = $nombre;
            $this -> apellido = $apellido;
            $this -> nivel = 0;
            $this -> deporte = $deporte;
        }
        
        //Getter y Setter
        public function getNombre(){ return $this->nombre; }
       
        public function setNombre($nombre){ $this->nombre = $nombre; }

        public function getApellido(){ return $this->apellido; }
       
        public function setApellido($apellido){ $this->apellido = $apellido; }

        public function getDeporte(){ return $this->deporte; }

        public function setDeporte($deporte){ $this->deporte = $deporte; }

        public function getNivel(){ return $this->nivel; }

        public function getPartidos(){ return $this->partidos; }

        public function setPartidos($partidos){ $this->partidos = $partidos; }

        public function introducirResultado(String $valor){
            switch($valor){
                case "victoria":
                    array_push($this -> partidos,$valor);
                        $this -> acumuladorVictoria ++;
                    if($this -> acumuladorVictoria == self :: victoria){
                        $this -> nivel++;
                        $this -> acumuladorVictoria=0;
                    }
                case "derrota":
                    array_push($this -> partidos,$valor);
                    $this -> acumuladorDerrota ++;
                    if($this -> acumuladorDerrota == self :: victoria){
                        $this -> nivel--;
                        $this -> acumuladorDerrota=0;
                    }
                case "empate":
                    array_push($this -> partidos,$valor);
            }
        }
        
        public function imprimirInformacion(){
             return
                "<p class='user'> Nombre y Apellido: ".$this->nombre." , ".$this->apellido." <br>Deporte: ".$this->deporte."<br>Nivel: ".$this->nivel."</p>
                 <ul> Partidos:".
                    array_walk($this->partidos,function($tiem,$calve){
                       if(empty($item)){
                        return print("<li>No Tiene nigul partido</li>");
                       }else{
                        print("<li>".$item."</li>");
                       }
                    })
                 . "</ul>";
        }

        public function CrearPartidos(){
            return "<p>".$this -> nombre ." ha creado partido</p>";
        }

    }

    
?>
