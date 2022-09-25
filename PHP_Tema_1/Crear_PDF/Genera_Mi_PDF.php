<?php
require('./fpdf184/fpdf.php');

if(isset($_GET)){
    $nombre=$_GET['nombre'];
    $apellido=$_GET['apellido'];
    $telefo=$_GET['telefono'];
    $fecha=$_GET['fecha'];
    $gmail=$_GET['gmail'];
    $descripcion=$_GET['descripcion'];

    $mipdf= new FPDF();
    $mipdf->AddPage();

    $mipdf->setFont('Arial','B',35);
    $mipdf->cell(70, 10, "Carta de recomendacion");
    $mipdf->Ln(10);
    $mipdf->cell(0,0,"______________________________________________________________________________________________________________________________________________________",0,0,"C");
    $mipdf->Ln(20);

    $mipdf->setFont('Courier','I',25);
    $mipdf->cell(0,10,"Estimado ".$nombre .$apellido,0,0);
    $mipdf->Ln(20);

    $mipdf->setFont('','',15);
    $mipdf->cell(0,10,"Uster en la fecha: ".$fecha);
    $mipdf->Ln(10);
    $mipdf->cell(0,10,"nos ha mandado un describcion que va mostrar siguiente",0,1,'C');
    $mipdf->Ln(10);
    $mipdf->cell(0,0,"------------------------------------------------------------------------------------------------------------------------------------------------------",0,0,"C");
    $mipdf->Ln(20);    

    $mipdf->cell(0,10,"Correo:" .$gmail);
    $mipdf->Ln(20);

    $mipdf->cell(0,10,"Telefono:" .$telefo);
    $mipdf->Ln(20);

    $mipdf->cell(0,10,"Descripcion:");
    $mipdf->Ln(20);

    $mipdf->Multicell(0,10,$descripcion,0,'C');
    $mipdf->Ln(20);
    
    $mipdf->SetY(260);
    $mipdf->SetFont('Arial','B','10');
    $mipdf->cell(0,10,"Firmado: Direccion",0,0,"R");
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
                    descripcion: <input type="text" name="descripcion" id="">
                </fieldset><br/>
                <input type="submit" value="Genera PDF">
            </form>

        </div>
    
</body>
</html>