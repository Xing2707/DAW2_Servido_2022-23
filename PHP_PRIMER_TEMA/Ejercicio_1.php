<?php
    $hasta = 10;
    $num = 5;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8"/>
            <meta name="viewport" content="width=device-width, initial-sacale=1.0"/>
            <title>Tabla de multiplicacion</title>
    </head>
    <body>
        <table border="1px">
            <th colspan="2">multiplicaicon de <?=$num?> </th>
                <?php for($i=0; $i < $hasta; $i++) { ?>
                        <tr>
                            <td> <?=$num?> * <?=$i?> </td>
                            <td> <?=$num*$i?> </td>
                        </tr>
                <?php } ?>
        </table>
    </body>
</html>
