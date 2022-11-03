<?php
$data =file_get_contents("tema.csv");

$data= explode("\n",$data);
array_pop($data);
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
            border: 2px solid cyan;
            border-collapse: collapse;
        }
        th,td{
            width:100px;
            height: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Tema</th>
                <th>Hora</th>
                <th>Minuto</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($data as $key => $valor){
                echo "<tr>";
                    $valor = explode(";",$valor);
                echo "<td>" .$valor[0]. "</td>";
                echo "<td>" .$valor[1]. "</td>";
                echo "<td>" .$valor[2]. "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>

    </table>
</body>
</html>