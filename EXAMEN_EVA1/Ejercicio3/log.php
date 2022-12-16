<?php
    try{
        $mysql =new PDO('mysql:host=localhost;dbname=examen',"examen","examen");

        function imprimir($mysql){
            $logs=$mysql->prepare("SELECT * FROM Logs");        
            $logs->setFetchMode(PDO::FETCH_ASSOC);
            $logs->execute();

            echo "<table>";
            echo "<tr>
                    <th>NAVEGADOR</th>
                    <th>TiempoRealiza</th>
                </tr>";
            while($row = $logs->fetch()){
                echo "<tr>";
                echo "<td>{$row["navegador"]}</td>";
                echo "<td>".date("d.m.s h:s",$row["timestampp"])."</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }catch(PDOExcetion $e){
        print "!Error".$e->getMessage() ."\n";
        die();
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
    <?=imprimir($mysql)?>
</body>
</html>