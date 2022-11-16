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

/*function cleanData($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}*/

// if(isset($_POST['enviar'])){

//     if($textoN->comprobar($_POST[$labelNombre]) && $textoAp->comprobar($_POST[$labelApellido])){
//         $textoN->setX($_POST[$labelNombre]);
//         $textoAp->setX($_POST[$labelApellido]);

//         array_push($arrayError, ["texto"=>" "]);
//     }else{
//         $arrayError += ["texto"=>"Error en Nombre o Apellido"];
//     }

//     if($numero->comprobar($_POST[$labelNumber])){
//         $numero->setX($_POST[$labelNumber]);
//         array_push($arrayError, ["numero"=>" "]);
//     }else{
//         $arrayError += ["numero"=>"Error en edad"];
//     }

//     if($radio->comprobar($_POST)){
//         $radio->setX($_POST['sexo']);
//         array_push($arrayError, ["radio"=>" "]);
//     }else{
//         $arrayError += ["radio"=>"Error en radio"];
//     }

//     if($check->comprobar($_POST)){
//         $check->setX($_POST['check']);
//         array_push($arrayError, ["check"=>" "]);
        
//     }else{
//         $arrayError += ["check"=>"Error en check"];
//     };
//     if($textA->comprobar($_POST['textA'])){
//         $textA->setX($_POST['textA']);
//         array_push($arrayError, ["textA"=>" "]);
//     }else{
//         $arrayError += ["textA"=>"Error en textArea"];
//     };

    

    //ENVIAR DATOS A OTRA VENTANA O CREAR PDF
    //llamar a funcion cleanData
// }
print_r($_POST);
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
                <?php $radio->crear($_POST); ?>

            <b>SELECCIONE PROVINCIA:</b><br>
                <?php $select->crear($_POST); ?>

        </fieldset>
        <fieldset><legend>HOBBIES</legend>
            <?php
                $check->crear($_POST);
                $textA->crear($_POST);
            ?>
            <br><br>
        </fieldset>
        <input type="submit" value="enviar" name="enviar"/>
    </form>
</body>
</html>