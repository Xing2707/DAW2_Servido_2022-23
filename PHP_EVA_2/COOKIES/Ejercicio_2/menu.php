<?php
    function pintar($usuario){
        $user=(empty($usuario))? "anolimos" : $usuario;
        echo"
            <div id='menu'>
                <ul>
                    <li><a href='pagina1.php'> Pagina_1 </a></li>
                    <li><a href='pagina2.php'> Pagina_2 </a></li>
                    <li><a href='config.php'> configuracion </a></li>
                    <li>".$user."</li>
                </lu>
            </div>";
    }
?>