<?php 

function suma($inicion, $final){
    return $inicion+$final;
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
                <p> <?=suma(mt_rand(0,20),mt_rand(0,20))?> </p>
            <?php } ?>
        </div>
</body>
</html>