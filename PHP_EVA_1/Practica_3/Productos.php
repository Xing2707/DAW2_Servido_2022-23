<?php
$productos = [
        "naranja" => 1.2,
        "manzana" => 1.5,
        "pera" => 1.8,
        "platano" => 0.8,
        "kiwi" => 0.75,
        "macarrones" => 0.5,
        "arroz" => 0.75,
        "salchichas" => 1,
        "patatas_fritas" => 3,
        "paninis" => 1.5,
        "leche_6_uds" => 5,
        "pizza_jamon_serrano" => 2.59,
        "helado_chocolate" => 2.99,
    ];

    function mostrar_producto($var){
        $nombre=array_keys($var);
        for($i=0; $i<count($var); $i++){
            print("<tr>");
                print("<td>".$nombre[$i]."</td>  <td>" .$var[$nombre[$i]]. "</td> ");
                print("<td> <input type='number' step='any' name='".$nombre[$i]."' value='".$_GET[$nombre[$i]]."'/> </td>" );
            print("</tr>");
        }
    } 
    
    $envia=false;
    $fruta=array_keys($productos);
    if(count($_GET)>0){

       for($i=0; $i<count($productos); $i++){
                $precio_u[$i]=($productos[$fruta[$i]]* $_GET[$fruta[$i]]);
        }
        
        $tot=array_sum($precio_u);
        array_push($precio_u,$tot);

        $envia=true;

        function factura(){
            global $productos;
            global $fruta;
            global $precio_u;

            print("<tr> <td colspan='4'> Producto Comprado </td> </tr>");
            print("<tr> <td> Nombre </td> <td> Precio_U </td> <td> cantidad </td> <td> Precio_F </td> </tr>");
            print("<tr>");

            for($i=0; $i<count($productos); $i++){
                if($_GET[$fruta[$i]]>0){
                    print("<td> ".$fruta[$i]." </td>  <td> " .$productos[$fruta[$i]]. " </td> <td> ".$_GET[$fruta[$i]] ." </td> <td> ".$precio_u[$i]." </td>");
                print("</tr>");
                }
                if($i==count($productos)-1){
                    print("<tr> <td colspan='4'> total:".$precio_u[count($precio_u)-1]."</tr> </td>");
                }
            }
        }

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <style>
        body{
            margin: auto;
            padding: 1%;
        }
        #fondo{
            width: 80%;
            margin: auto;
        }
        #fondo>h1{
            text-align: center;
            margin: auto;
        }

        #fondo>form{
            width: 90%;
            margin: auto;
            padding: 0.5%;
        }

        #fondo>form>table{
            width: 50%;
        }
        
        #fondo>form>table,tr,td{
            border-collapse: collapse;
            border: 2px solid cyan;
            margin: auto;
            text-align: center;
        }

        #fondo>form>table>tr,td{
            padding: 1%;
        }

        #boton{
            width: 40%;
            padding: 1%;
        }
        #total{
            text-align: left;
        }
    </style>
</head>
<body>
        <div id="fondo">
            <h1>Lista de productos</h1>
            <form action="Productos.php" method="get" >
                <table>
                    <?php if(!$envia){ ?>
                        <tr>
                            <td>Nombre</td>
                            <td>Precio</td>
                            <td>Cantidad</td>
                        </tr>
                        <?=mostrar_producto($productos)?>
                        <tr>
                            <td colspan="3"><input type="submit" value="Enviar" id="boton"/></td>
                        </tr>
                    <?php } else{?>
                        <?php factura() ?>
                    <?php }?>
                </table>
            </form>
        </div>
</body>
</html>