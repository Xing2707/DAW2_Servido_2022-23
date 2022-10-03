<?php
$personas = [
    ["Jorge", 1],
    ["Bea", 0],
    ["Paco", 1],
    ["Amparo", 0],
];

function sexo($var){
        if($var[1]==1){
            $sex=true;
        }else{
            $sex=false;
        }
    return ($sex)? "Seño: ".$var[0] :"Señora: ".$var[0] ;
}

// function nombre($elemen, $clave){
    
//       print($elemen. $clave);
    
//  }


$per= array_map('sexo',$personas);

    print("Array-map: <br>");
    print_r($per);
    // print("<br> Array-walk: <br>");
    // array_walk($personas,"nombre");
?>