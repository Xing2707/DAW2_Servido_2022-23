<?php
    function PintaTabla(){
        $var2=array_keys($_GET);
        $i=0;
        foreach($_GET as $var){
            print("<tr>");
            print("<td> " .$var2[$i]. " </td> ");
            print("<td> " .$var. " </td> ");
            print("</tr>");
            $i++;
        }
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
        table,tr,td{
            border: 2px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>Tabla con url</h1>
    <div>
        <table>
            <?=PintaTabla()?>
        </table>
    </div>
</body>
</html>