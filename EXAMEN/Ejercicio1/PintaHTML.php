<?php
    $array=[1=>"Pepe",2=>"Juan",3=>"Cesar",6=>"Joser",7=>"Ana"];
    function pintaHorizontal(array $valor){
        echo"<table>";
        echo "<tr>";
            array_walk($valor,function($item,$key){
                    echo"<th>".$key."</th>";    
            });
        echo "</tr>";
        echo "<tr>";
        array_walk($valor,function($item,$key){
            echo"<th>".$item."</th>";
        });
        echo "</tr>";
        echo"</table>";
    }

    function pintaVertical(array $valor){
        echo"<table>";
            array_walk($valor,function($item,$key){
                echo "<tr>";
                    echo"<td>".$key."</td>";
                    echo"<td>".$item."</td>";    
                echo "</tr>";
            });
        echo"</table>";

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,th,td{
            border: 3px solid blue;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?=pintaHorizontal($array);?><br>
    <?=pintaVertical($array);?>
</body>
</html>