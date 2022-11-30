<?php
    spl_autoload_register(function($class){
        $classPath=realpath("./");
        $file=str_replace('\\','/',$class);
        require("$classPath/${file}.php");

    });

    const numero=3;
    const cero = 0;
    const uno = 1;
    const dos = 2;
    const X = "X";
    const O = "O";
    $array=[
        1=>[1=>" ",2=>" ",3=>" "],
        2=>[1=>" ",2=>" ",3=>" "],
        3=>[1=>" ",2=>" ",3=>" "],
    ];
    $error;

    $select=new Multiple\Select("turno",[" ",X,"O"]);
    $posicionX=new Simple\Numero(X,1,3);
    $posicionY=new Simple\Numero("Y",1,3);

    function cleanData($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function generarTabla($array,$num=numero){
        echo "<table>";
        for($i=1; $i<=$num; $i++){
            echo "<tr>";
            for($y=1; $y<=$num; $y++){
                echo "<td>".$array[$i][$y]."</td>";
            }
            echo"</tr>";
        }
        echo "</table>";
    }
    if(isset($_GET['Enviar'])){
        if($select->validar($_GET) && $posicionX->validar($_GET) && $posicionY->validar($_GET)){
            file_put_contents(
                "tresRaya.csv",
                $_GET[$select->getName()].",".$_GET[$posicionX->getName()].",".$_GET[$posicionY->getName()]."\n",
                FILE_APPEND
               );
                $data =file_get_contents("tresRaya.csv");
                $data= explode("\n",$data);
                array_pop($data);                
                }
                foreach($data as $key => $valor){
                    $valor = explode(",",$valor);

                    if($array[$valor[dos]][$valor[uno]]==$valor[cero]){
                        $error="<p>Error! Introduce otro posicion valido</p>";
                    }else{
                        $error=null;
                        if($valor[cero]==X){
                            $array[$valor[dos]][$valor[uno]]=X;
                        }else{
                            $array[$valor[dos]][$valor[uno]]=O;
                        }
                    }
                }
                //cleanData();

                
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
            td{
                height: 50px;
                width: 50px;
            }
    </style>
</head>
<body>
    <?=generarTabla($array)?>
    <form action="" method="get">
        <label>Seleccionar turnos</label>
            <?=$select->pintar($_GET)?><br>
            <?=$posicionX->pintar($_GET)?><br>
            <?=$posicionY->pintar($_GET)?><br>
        <input type="submit" name="Enviar" value="Enviar"/>
    </form>
    <?php if(!empty($error)){echo $error;} ?>
</body>
</html>