<?php
define("USER_CHANGE_LEVEL", 6);
    class Usuario{
        private string $nombre;
        private string $apellido;
        private string $deporte;
        private int $nivel;
        private array $partidos;
        protected $victoria;
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
            $this -> partidos=[];
            $this -> victoria=USER_CHANGE_LEVEL;

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


        public function introducirResultado(string $valor){
            switch($valor){
                case "victoria":
                    ($this -> validar($valor))? $this -> acumuladorVictoria++ : $this -> acumuladorVictoria=0;
                    array_push($this -> partidos,[$this ->CrearPartidos(),$valor]);
                    if($this -> acumuladorVictoria == $this -> victoria){
                        $this -> nivel++;
                        if($this-> nivel > $victoria){ $this -> nivel ==$victoria; }
                        $this -> acumuladorVictoria=0;
                    }
                    break;
                case "derrota":
                    ($this -> validar($valor))? $this -> acumuladorDerrota++ : $this -> acumuladorDerrota=0;
                    array_push($this -> partidos,[$this ->CrearPartidos(),$valor]);
                    if($this -> acumuladorDerrota == $this -> victoria){
                        $this -> nivel--;
                        if($this -> nivel < 0){ $this -> nivel ==0; }
                        $this -> acumuladorDerrota=0;
                    }
                    break;
                case "empate":
                    array_push($this -> partidos,[$this ->CrearPartidos(),$valor]);
                    break;
            }
        }
        
        public function imprimirInformacion(){
             echo "<p class='user'> Nombre y Apellido: ".$this->nombre." , ".$this->apellido." <br>Deporte: ".$this->deporte."<br>Nivel: ".$this->nivel."</p>";
             $this -> imprimirLista($this -> partidos);              
        }

        public function CrearPartidos(){
            return "<p>".$this -> nombre ." ha creado partido</p>";
        }

        public function imprimirLista(array $valor){
            print("<ul> Partidos:");
            for($i=0; $i<count($valor);$i++){
                print("<li>".$valor[$i][0].$valor[$i][1]."</li>");
            }
            print("</ul>");
        }

        public function validar(string $valor){
            if($this -> partidos[array_key_last($this-> partidos)][1]==null){
                  return true;
            }elseif($this -> partidos[array_key_last($this-> partidos)][1]==$valor){
                  return true;
            }else{
                  return false;
            }
        }

    }

    
?>
