<?php 
    $num;
    $mayor;
    $mediano;
    $pequeno;

    function GeneraNumero(){
        global $num;
        for($i=0; $i<3; $i++){
            $num[$i]=mt_rand(1,100);
        }
    }

    sort($num);

    function visualizar(){
        global $num;
        global $mayor;
        global $mediano;
        global $pequeno;

        for($i=count($num)-1; $i>=0; $i--){
            if($i==count($num)-1){
                $mayor=$num[$i];
                print("<h1> Mayor: ".$mayor."</h1> <br>");
            }elseif($i>0){
                $mediano=$num[$i];
                print("<h2> Mediano: ".$mediano."</h2> <br>");
            }else{
                $pequeno=$num[$i];
                print("<h3> pequeño: ".$pequeno."</h3> <br>");
            }
        }
    }

    GeneraNumero();

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
    <h1>Numero Aleatorio</h1>
        <?=visualizar() ?>
</body>
</html>