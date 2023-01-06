<?php
    function pintar($titulo,$user,$descripcion){
        return "
            <?php
                session_name('LOGIN');
                session_start();
                require_once('../Comun/private_area.php');
            ?>
            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <link rel='stylesheet' href='./Comun/estiloComun.css'>
                <title>{$titulo}</title>
            </head>
            <body>
                <h1>{$titulo}</h1>
                <h3>{$user}</h3>
                <div id='contenido'>
                    <p>{$descripcion}</p>
                </div>
                <p><a href='../main/main.php'>volver a main</a></p>
            </body>
            </html>
        ";
    }
?>