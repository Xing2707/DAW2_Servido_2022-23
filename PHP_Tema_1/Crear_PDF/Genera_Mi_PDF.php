<?php
require('./fpdf184/fpdf.php');

if(isset($_GET)){
    $nombre=$_GET['nombre'];
    $apellido=$_GET['apellido'];
    $telefo=$_GET['telefono'];
    $fecha=$_GET['fecha'];
    $gmail=$_GET['gmail'];
    $ausnto=$_GET['asundo'];

    $mipdf= new FPDF();
    $mipdf->AddPage();
    $mipdf->setFont('Arial','',20);
    $mipdf->cell(70, 10, "Carta de recomendacion");
    $mipdf->set;
    $mipdf->setFont('Arial','B',15);
    //$mipdf->setTextColor();
    $mipdf->Multicell(0,30,"Estimado ".$nombre);
    $mipdf->Output();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
        <div>
            <form accion="Genera_Mi_PDF.php" methor="get">
                <fieldset>
                    cabezera <br/>
                    nombre:<input type="text" name="nombre" id=""> <br/>
                    apellido:<input type="text" name="apellido" id=""> <br/>
                    telefono:<input type="text" name="telefono" id=""> <br/>
                    fecha:<input type="date" name="fecha" id=""> <br/>
                </fieldset>
                <fieldset>
                    cuervo <br/>
                    gmail: <input type="email" name="gmail" id="">
                    asunto: <input type="text" name="asundo" id="">
                </fieldset><br/>
                <input type="submit" value="Genera PDF">
            </form>

        </div>
    
</body>
</html>