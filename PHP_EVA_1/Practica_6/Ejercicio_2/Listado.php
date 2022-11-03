<?php
$data =file_get_contents("tema.csv");

$line= explode("\n");
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
    <table>
        <thead>
            <tr>
                <th>Tema</th>
                <th>Hora</th>
                <th>Minuto</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <?php
                    foreach($line as $lin){
                        echo "<tr>";
                            $data = explode(":",$lin);
                        echo "<td>".$data[0]."</td>";
                        echo "<td>".$data[1]."</td>";
                        echo "<td>".$data[2]."</td>";
                        echo "</tr>";
                    }
                    ?>
                </tr>
        </tbody>

    </table>
</body>
</html>