<?php
$personas = [
    ["Jorge", 1],
    ["Bea", 0],
    ["Paco", 1],
    ["Amparo", 0],
];

function Mujer($var){
    if($var[1]==0){
        return $var[0];
    }

}

function Hombre($var){
    if($var[1]==1){
        return $var[0];
    }
}

print("Mujer: <br>");
print_r(array_filter($personas,"Mujer"));
print("<br>");
print("Hombre: <br>");
print_r(array_filter($personas,"Hombre"));
?>