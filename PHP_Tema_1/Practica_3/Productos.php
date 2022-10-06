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

    for($i=0; $i<count($productos); $i++){
        $cantidad[$i]=" ";
    }

    function mostrar_producto($var){
        
        for($i=0; $i<count($var); $i++){
            print("<tr>");
                print("<td>".key($var)."<td> <br> <td>" .$var[key($var)]. "</td> <br>");
                print("<td> <input type='number' step='any' class=" .cant($i). " /> </td> <br>" );
            print("</tr>");
        }
    } 
    
    function cant($var){
        switch($var){
            case 0: return print('nar');
            case 1: return print('man');
            case 2: return print('per');
            case 3: return print('pla');
            case 4: return print('kiw');
            case 5: return print('mac');
            case 6: return print('arr');
            case 7: return print('sal');
            case 8: return print('pat');
            case 9: return print('pan');
            case 10: return print('lec');
            case 11: return print('piz');
            case 12: return print('hel');

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
</head>
<body>
        <div>
            <table>
                <tr>
                    <td>Nombre</td>
                    <td>Precio</td>
                    <td>Cantidad</td>
                </tr>
                <?=mostrar_producto($productos)?>
                <tr>
                    
                <tr>
            </table>
        </div>
</body>
</html>