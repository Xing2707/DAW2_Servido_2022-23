<?php 

function suma($var){
    $var2==$var;
    return $var2;
}
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
        <div>
            <?php for($i=0; $i<10; $i++){ ?>
                <p> <?=suma(mt_rand(1,100))?> </p>
            <?php } ?>
        </div>
</body>
</html>