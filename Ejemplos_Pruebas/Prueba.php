<?php
$i = 4;
$j = 0xFF00FF;  //numero hexadecimal
$p = 255;
$cc = 1.234e10;  
$bb = 0b01010101010101;  // numero binario
print_r(get_defined_vars());
echo gettyoe($bb);

$i="10 Cadena";
$i= (int) $i; //concatena $i de string a int
var_dump($i);
$i=(boolean) 0; // convierte $i false
var_dump($i);
$i=(boolean) -1; // convierte $i true
var_dump($i); // devuelve tipo de variable y su informacion se implime en la pagina.

echo is_integer($i);  //si es numero devuelve true si no es devuelve false pero no implime nada

echo (is_integer($i))?'si':'no'; //ternario si devuelve verdadero me implime 'si' si no es me implime 'no'

$cadena_ml_resueva = <<<EOS
    este es una cadena que resuelva variables y tiene variabs lineas.
    hola $i
EOS; // este varaible resuelve variable(los variable no hace falta ni "" '') y puede tener salto de lineas dentro de EOS

echo "Esto_es_una_$icadena_sin_espacios"; // no me reconove el variable $i por que esta pagado al texto.
echo "Esto_es_una_${i}cadena_sin_espacios"; //${} sirve para usar una variable pegando al texto.


?>