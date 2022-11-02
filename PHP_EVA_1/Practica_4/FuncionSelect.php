<?php
$opciones = [
  "Madrid" => 28,
  "Sevilla" => 17,
  "Cáceres" => 56,
];

function pintar($item,$clave,$seleccionado){
    $sel=($item==$seleccionado)? 'selected' :'';
    print("<option value='" .$item. "'".$sel." > ".$clave. "</option>");
}

function seleccion(array $valor,int $seleccionado = -1){
    array_walk($valor,"pintar",$seleccionado);
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
            <?=seleccion($opciones,17)?>
        </select>
    </form>
</body>
</html>