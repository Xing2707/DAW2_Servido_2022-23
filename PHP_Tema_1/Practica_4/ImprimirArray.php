<?php
    $usuario = [
        "nombre" => "Pepe",
        "dirección" => "Calle full número 14",
        "teléfono" => "91 234 55 69",
        "población" => "Madrid",
        "edad" => 25,
    ];
    
      function pintar($item,$clave){
        print($clave." <input name='" .$clave. "' value='" .$item. "' /> <br>");
      }
    function formulario( array $valor){
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
     <form action="post" id="dato">
        <?=formulario($usuario)?>
     </form>
</body>
</html>