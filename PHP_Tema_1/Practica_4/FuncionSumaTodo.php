<?php

//Este codigo es una verguenza! No usar mas!
$num=0;
function suma($var){
    return $var2+=$var;
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
                <p> <?=$num+=suma(mt_rand(1,100))?> </p>
            <?php } ?>
        </div>
</body>
</html>