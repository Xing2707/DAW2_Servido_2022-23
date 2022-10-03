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


 function ver_lista($var){
    for($i=0; $i<count($var); $i++){
        print("<li> ".$var[$i]." </li> <br> ");
    }
 }

$per= array_map('sexo',$personas);

ver_lista($per);

    print("Array-map: <br>");
    print_r($per);
    // print("<br> Array-walk: <br>");
    // array_walk($personas,"nombre");
?>