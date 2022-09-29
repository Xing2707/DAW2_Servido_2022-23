<?php
$horario =[
    [" ","Lunes","Martes","Miercoles","Jueves","Viernes"],
    ["15:05-16:00","Tutoria"],
    ["16:00-16:55","DAWC","ITGS","DIW","EIE","DWES"],
    ["16:55-17:50","DAWC","DAW","DIW","DAW","DWES"],
    ["17:50-18:45","DAWC","DAW","DIW","DAW","DWES"],
    ["19:10-20:05","EIE","DIW","DWES","DWES","DWEC"],
    ["20:05-21:00","EIE","DIW","DWES","DWES","DWEC"],
    ["21:00-21:45","ITGS","DIW","DWES","DWES","DWEC"],
];


function crear_tabla($var){
    for($i=0; $i<count($var); $i++){ 
        print("<tr>");
        for($y=0; $y<count($var[$i]); $y++){ 
            if(($i>=0 && $y==0) || ($i==0 && $y>=0)){
                print("<td class='F-H'>".$var[$i][$y]. "</td>");
            }else{
            print("<td>".$var[$i][$y]. "</td>");
            }
        }
        print("</tr>");
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
            h1{text-align:center;}
            table{ 
                margin: 0 auto;
                padding: 1%;
                width: 50%;
                border: 2px solid gold;
                border-collapse: collapse;
            }
            .F-H{
                background-color: azure;
                font-weight: bold;
                border: 1px solid cyan;
            }
    </style>
</head>
<body>
        <h1>Horario</h1>
        <table>
            <?=crear_tabla($horario)?>
        </table>
</body>
</html>