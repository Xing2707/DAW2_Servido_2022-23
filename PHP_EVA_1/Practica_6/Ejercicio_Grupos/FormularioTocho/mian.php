<?php
//Funcion Autoload
spl_autoload_register(function ($class){
    $classPath ="./";
    require("$classPath${class}.php");
});

$select = new Select([" ","MADRID","BARCELONA","VALENCIA","MURCIA","SEVILLA"],"Provincia");
$check = new CheckBox(["DEPORTES","LECTURA","VIDEOJUEGOS","CINE"],"Hobbies");
$radio = new Radio(['HOMBRE','MUJER','OTRO'],"Sexo");
$numero = new Numero("Edad",99,18,1);
$textoN = new Texto("Nombre",20,4);
$textoAp = new Texto("Apellido",20,4);
$textA = new TextArea("Descripcion","Describe algo sobre tu hobbies u otros",5,50);

if(isset($_POST['enviar'])){
    if($textoN->comprobar($_POST) && $textoAp->comprobar($_POST) && $textA->comprobar($_POST) && $select->comprobar($_POST) && $radio->comprobar($_POST) && $check->comprobar($_POST) && $numero->comprobar($_POST))
    {
        $check->setCadenas($_POST[$check->getNombre()]);
        file_put_contents(
            "datoPesona.csv",
            $_POST[$textoN->getNombre()].";".$_POST[$textoAp->getNombre()].";".$_POST[$numero->getNombre()].";".$_POST[$radio->getNombre()].";".$_POST[$select->getNombre()].";".$check->getCadenas().";".$_POST[$textA->getNombre()]."\n",
            FILE_APPEND
           );

        //pdf
        require('./fpdf184/fpdf.php');
        $pdf = new FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial', '', 10);
        $pdf -> MultiCell(0,5, 'Hola mi nombre es ' . $_POST[$textoN->getNombre()] . " " . $_POST[$textoAp->getNombre()] .' mi sexo es '.$_POST[$radio->getNombre()].' actualmente vivo en ' . $_POST[$select->getNombre()] . '. Tengo ' .  $_POST[$numero->getNombre()] . ' anios y mis aficiones son ' .  $check->getCadenas() . ' en especial ' . $_POST[$textA->getNombre()]);
        $pdf -> Output();

        cleanData($_POST);
    }

};

function cleanData($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
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
        p{
            margin-top: 5px;
            margin-bottom: -5px;
            color:red;
            font-weight: bolder;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>DATOS PERSONALES</h1>
    <form action="" method="post">
        <fieldset><legend>DATOS PERSONALES</legend>
            <?php $textoN->crear($_POST);?><br>
            <?php $textoAp->crear($_POST);?><br>
            <?php $numero->crear($_POST);?><br>
            <b>SEXO: </b> <br>
                <?php $radio->crear($_POST); ?><br>

            <b>SELECCIONE PROVINCIA:</b><br>
                <?php $select->crear($_POST); ?>

        </fieldset>
        <fieldset><legend>HOBBIES</legend>
            <?php $check->crear($_POST);?><br>
            <?php $textA->crear($_POST);?><br>
        </fieldset>
        <input type="submit" value="enviar" name="enviar"/>
    </form>
</body>
</html>