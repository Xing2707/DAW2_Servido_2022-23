<?php
$n=rand(15,50);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piramide</title>
    <style>
        p{
            text-align: center;
            margin:0px auto;
        }
    </style>
</head>
<body>
    <h1>Piramide  de asteriscos</h1>
        <p>
            <?php for($i=1; $i<=$n; $i++) { 

                for($y=1; $y<=$n-$i; $y++) { 
                    print(" ");
                }
                for($c=1; $c<=($i*2)-1; $c++) {
                    print("*");
                }
                print('<br/>');
            } ?>
        </p>
</body>
</html>