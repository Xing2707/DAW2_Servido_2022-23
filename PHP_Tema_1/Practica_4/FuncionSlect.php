<?php
$opciones = [
  "Madrid" => 28,
  "Sevilla" => 17,
  "Cáceres" => 56,
];

function pintar($item,$clave){
    if(strtolower($clave)=="madrid"){
        print("<option value='" .$item. "' selected > ".$clave. "</option>");
    }else{
        print("<option value='" .$item. "'> ".$clave. "</option>");
    }
}

function seleccion(array $valor){
    array_walk($valor,"pintar");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <select>
            <?=seleccion($opciones)?>
        </select>
    </form>
</body>
</html>