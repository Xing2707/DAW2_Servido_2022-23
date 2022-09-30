<?php
$horario =[
    ["  ","Lunes","Martes","Miercoles","Jueves","Viernes"],
    ["15:05-16:00","Tutoria","  ","  ","  ","  "],
    ["16:00-16:55","DAWC","ITGS","DIW","EIE","DWES"],
    ["16:55-17:50","DAWC","DAW","DIW","DAW","DWES"],
    ["17:50-18:45","DAWC","DAW","DIW","DAW","DWES"],
    ["Regleo","Regleo","Regleo","Regleo","Regleo","Regleo",],
    ["19:10-20:05","EIE","DIW","DWES","DWES","DAWC"],
    ["20:05-21:00","EIE","DIW","DWES","DWES","DAWC"],
    ["21:00-21:45","ITGS","DIW","DWES","DWES","DAWC"],
];


function crear_tabla($var){
    $var1=" ";
    $var2=" ";
    $num1=0;
    $num2=0;
    $clase=" ";
    for($i=0; $i<count($var); $i++){ 

        print("<tr>");

        for($y=0; $y<count($var[$i]); $y++){ 

            $clase=color($var[$i][$y]);

            if(($i>=0 && $y==0) || ($i==0 && $y>=0)){
                if($var[$i][$y]=="Regleo"){
                    print("<td colspan='6' id='reg'>".$var[$i][$y]."</td>");
                }else{
                    print("<td class='F-H'>".$var[$i][$y]. "</td>");
                }
            }else{ 
                    if($var[$i][$y]=="Tutoria"){
                        print("<td id='tuto'>".$var[$i][$y]."</td>");
                    }else{
                        if($var[$i][$y]==" "){

                        }else{
                            if($var[$i][$y]=="Regleo"){

                            }else{
                                if(count($var)-$i>=2){
                                $var1=$var[$i+1][$y];
                                $var2=$var[$i+2][$y];
                                $num1=$i+1;
                                $num2=$i+2;
                                }
                                if($var[$i][$y]==$var1 && $var[$i][$y]==$var2){
                                    $var[$num1][$y]=" ";
                                    $var[$num2][$y]=" ";
                                    print("<td ".$clase." rowspan='3'>".$var[$i][$y]."</td>");
                                }else{
                                    if($var[$i][$y]==$var1){
                                    $var[$num1][$y]=" ";
                                    print("<td ".$clase." rowspan='2'>".$var[$i][$y]."</td>");
                                    }else{
                                        print("<td ".$clase." class='vacio' >".$var[$i][$y]."</td>");
                                    }
                            }
                        }
                    }
                }
            }
        }
            print("</tr>");
    }
}

function color($var){
    switch($var){
        case "DAWC":return "class='DAWC'";
        case "DWES":return"class='DWES'";
        case "DIW":return "class='DIW'";
        case "DAW":return "class='DAW'";
        case "EIE":return "class='EIE'";
        case "ITGS":return "class='ITGS'";
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
            #tuto{
                border: 1px solid black;
                text-align:center;
                background-color: aquamarine;
            }
            #reg{
                border: 1px solid cyan;
                text-align:center;
                background-color: violet;
            }
            .DAWC{
                border: 1px solid black;
                text-align:center;
                background-color:palegoldenrod;
            }
            .DWES{
                border: 1px solid black;
                text-align:center;
                background-color:aqua;
            }
            .DIW{
                border: 1px solid black;
                text-align:center;
                background-color:lightpink;
            }
            .DAW{
                border: 1px solid black;
                text-align:center;
                background-color:mediumpurple;
            }
            .ITGS{
                border: 1px solid black;
                text-align:center;
                background-color:cornflowerblue;
            }
            .EIE{
                border: 1px solid black;
                text-align:center;
                background-color:goldenrod;
            }
            .vacio{
                border: 1px solid black;
                background-color:whitesmoke;
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