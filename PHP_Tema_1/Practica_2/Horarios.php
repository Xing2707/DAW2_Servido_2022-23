<?php
$horario = [
    "Lunes" => ["Tutoria","DWEC","EIE","ITGS_DAW"],
    "Martes" => ["ITGS_DAW","DAW","DIW"],
    "Miercoles" => ["DIW","DWES"],
    "Jueves" => ["EIE","DAW","DAWS"],
    "Viernes"=> ["DAWS","DAWC"],
];


for($i=0; $i <= count($horario); $i++){ 
    for($y=0; $y <= count($horario[$i]); $y++){ 
            print($horario[$i[$y]]);
    }
}
?>