<?php
require('./fpdf184/fpdf.php');

    $nombre=$_GET['nombre'];
    $apellido=$_GET['apellido'];
    $telefo=$_GET['telefono'];
    $fecha=$_GET['fecha'];
    $gmail=$_GET['gmail'];
    $descripcion=$_GET['descripcion'];
    $envio=false;
if(isset($_GET['nombre']) && isset($_GET['apellido']) && isset($_GET['telefono']) && isset($_GET['fecha']) && isset($_GET['gmail']) && isset($_GET['descripcion'])){

    $envio=true;

    $mipdf= new FPDF();
    $mipdf->AddPage();

    $mipdf->setFont('Arial','B',35);
    $mipdf->setTextColor(150,120,200);
    $mipdf->cell(70, 10, "Carta de Descripcion");
    $mipdf->Ln(10);
    $mipdf->cell(0,0,"______________________________________________________________________________________________________________________________________________________",0,0,"C");
    $mipdf->Ln(20);

    $mipdf->setFont('Courier','I',25);
    $mipdf->setTextColor(200,100,150);
    $mipdf->cell(0,10,"Estimado ".$nombre .$apellido,0,0);
    $mipdf->Ln(20);

    $mipdf->setFont('','',15);
    $mipdf->setTextColor(0,0,0);
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
    $mipdf->SetFont('Arial','B',10);
    $mipdf->setTextColor(250,100,50);
    $mipdf->cell(0,10,"Firmado: Direccion",0,0,"R");
    $mipdf->Ln(20);

    $mipdf->setY(276);
    $mipdf->setFont('Arial','I',8);
    $mipdf->cell(0,0,"Page-".$mipdf->pageNo());
}
if($envio){
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
    <style>
        form{
            margin: 0 auto;
            padding: 2%;
            width: 50%;
            border: 2px outset blue;
            background-color: azure;
            
        }
        form>fieldset{
            margin: 2%;
            padding: 2%;
        }
        form>.boton{
            width: 15%;
            margin: 0 auto;
            padding: 1% 2%;
            margin-left: 40%;
        }
    </style>
</head>
<body>
        <div>
            <form>
                <fieldset>
                    cabezera <br/><br/>
                    nombre:<input type="text" name="nombre" id=""> <br/><br/>
                    apellido:<input type="text" name="apellido" id=""> <br/><br/>
                    telefono:<input type="text" name="telefono" id=""> <br/><br/>
                    fecha:<input type="date" name="fecha" id=""> <br/><br/>
                </fieldset>
                <fieldset>
                    cuervo <br/><br/>
                    gmail: <input type="email" name="gmail" id=""><br/><br/>
                    descripcion: <input type="text" name="descripcion" id="">
                </fieldset><br/><br/>
                <input type="submit" value="Genera PDF" class="boton">
            </form>

        </div>
    
</body>
</html>