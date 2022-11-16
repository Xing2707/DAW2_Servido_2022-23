<?php
//Funcion Autoload
spl_autoload_register(function ($class){
    $classPath ="./";
    require("$classPath${class}.php");
});

$select = new Select();
$check = new CheckBox();
$radio = new Radio();
$numero = new Numero();
$textoN = new Texto();
$textoAp = new Texto();
$textA = new TextArea();
$labelNumber = "Edad";
$labelNombre = "Nombre";
$labelApellido = "Apellido";

function cleanData($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST['enviar'])){
    if(!empty($_POST[$labelNombre]) && !empty($_POST[$labelApellido]) && !empty($_POST[$labelNumber]) && !empty($_POST[$select->getNombre()]) && !empty($_POST[$check->getNombre()]) && !empty($_POST[$radio->getNombre()]) && !empty($_POST[$textA->getNombre()]) ){
        $hobby=$_POST[$check->getNombre()];
        $hobbys="";
        for($i=0; $i<count($hobby); $i++){
            $hobbys.=$hobby[$i].",";
        }
        file_put_contents(
            "datoPesona.csv",
            $_POST[$labelNombre].";".$_POST[$labelApellido].";".$_POST[$labelNumber].";".$_POST[$radio->getNombre()].";".$_POST[$select->getNombre()].";".$hobbys.";".$_POST[$textA->getNombre()],
            FILE_APPEND
           );
        cleanData($_POST);
    }

};

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
    <h1>DATOS PERSONALES</h1>
    <form action="" method="post">
        <fieldset><legend>DATOS PERSONALES</legend>
            <?php 
                $textoN->crear($labelNombre,20,4,$_POST);
                $textoAp->crear($labelApellido,20,4,$_POST);
                $numero->crear($labelNumber,99,18,$_POST);
            ?>
            <b>SEXO: </b> <br>
                <?php $radio->crear($_POST); ?><br>

            <b>SELECCIONE PROVINCIA:</b><br>
                <?php $select->crear($_POST); ?>

        </fieldset>
        <fieldset><legend>HOBBIES</legend>
            <?php $check->crear($_POST);?><br>
            <?php $textA->crear($_POST);?>
            <br><br>
        </fieldset>
        <input type="submit" value="enviar" name="enviar"/>
    </form>
</body>
</html>