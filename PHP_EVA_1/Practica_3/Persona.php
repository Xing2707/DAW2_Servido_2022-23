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

 function nombre($elemen, $clave){   //En parte de elemen se correo todo el array
    
       print((($elemen[1]==1)? "Seño: ".$elemen[0] : " <br> Señora: ".$elemen[0]."<br>"));
    
  }


 function ver_lista($var){
    for($i=0; $i<count($var); $i++){
        print("<li> ".$var[$i]." </li> <br> ");
    }
 }

$per= array_map('sexo',$personas);

print("Array-map: <br>");
print_r($per);

print("<br><br> Array_walk: <br>");
var_dump(array_walk($personas,'nombre')); 


// ver_lista($per);
//     // print("<br> Array-walk: <br>");
//     // array_walk($personas,"nombre");
// ?>