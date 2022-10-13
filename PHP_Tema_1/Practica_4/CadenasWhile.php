<?php
    $cadenas=$_GET["palabra"];

    function visualizar(){
        global $cadenas;
        $i=0;
        while($i<strlen($cadenas)){
            print('<h4>'.$cadenas[$i].'</h4>');
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
</head>
<body> 
    <div>
        <h1>Genera Cadenas</h1>
            <form action="CadenasWhile.php" method="get">
                Introduce palabra: <input type="text" name="palabra" value='<?=$cadenas?>'/>
                <input type="submit" value="Enviar"/>
            </form>
            <div>
                <?=visualizar()?>
            </div>
    </div>
    
</body>
</html>