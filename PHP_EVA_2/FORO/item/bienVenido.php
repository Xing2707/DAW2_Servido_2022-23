<?php
    session_name("LOGIN");
    session_start();
    require_once("../Comun/private_area.php");
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
    <h1>BIEN VENIDO A FORO DE ADMIN.</h1>
    <div id="loginout">
        <form action="../loginout.php" method="get">
            <label><input type="submit" value="loginout" name="loginout"></label>
        </form>
    </div>
    <p><a href="../main/main.php">volver a main</a></p>
</body>
</html>