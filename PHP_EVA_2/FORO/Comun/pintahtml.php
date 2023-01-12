<?php
    function pintar($titulo,$user,$descripcion){
        return "
            <?php
                session_name('LOGIN');
                session_start();
                require_once('../Comun/private_area.php');
                require_once('../Comun/cleanInput.php');
                require_once('../Comun/basedata.php');
                require_once('../Comun/pintaphp.php');   
            ?>
            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <link rel='stylesheet' href='../Comun/estiloComun.css'>
                <title>{$titulo}</title>
            </head>
            <body>
                <h1>{$titulo}</h1>
                <h3>{$user}</h3>
                <div id='loginout'>
                    <form action='../loginout.php' method='get'>
                        <label><input type='submit' value='loginout' name='loginout'></label>
                    </form>
                </div>
                <div id='contenido'>
                    <p>{$descripcion}</p>
                </div>
                <?=pintacomentario(".'$direccion['."'direccion']);?>
                <p><a href='../main/main.php'>volver a main</a></p>
                <?php if(".'$opcion'."){?>
                    <div>
                        <form method='get'>
                            <?=".'$item->pintar($_GET)'.";?>
                            <label><input type='submit' value='Enviar' name='Enviar'></label>
                        </form>
                    </div>
                <?php }?>
            </body>
            </html>
        ";
    }
?>