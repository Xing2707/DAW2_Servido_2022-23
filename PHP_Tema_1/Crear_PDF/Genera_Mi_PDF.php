<?php
require('./fpdf184/fpdf.php');

if(isset($GET)){
    $mipdf= new FPDF();
    $mipdf= AddPage();
    $mipdf= set
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
            <form acction="Genera_Mi_PDF.php" method="get">
                <fieldset>
                    cabezera <br/>
                    nombre:<input type="text" name="nombre" id=""> <br/>
                    apellido:<input type="text" name="apellido" id=""> <br/>
                    telefono:<input type="tel" name="telefono" id=""> <br/>
                    fecha:<input type="text" name="fecha" id=""> <br/>
                </fieldset>
                <fieldset>
                    cuervo <br/>
                    color de fondo: <input type="color" name="color_fondo" id="">
                    gmail: <input type="email" name="gmail" id="">
                    asunto: <input type="text" name="asundo" id="">
                </fieldset><br/>
                <input type="submit" value="Genera PDF">
            </form>
        </div>
    
</body>
</html>