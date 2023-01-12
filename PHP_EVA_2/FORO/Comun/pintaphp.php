<?php
    $opcion='false';
    $comentario;
    $fecha;

    spl_autoload_register(function($class){
        $classPath=realpath('../Formulario');
        $file=str_replace('\\','/',$class);
        require("$classPath/${file}.php");

    });            
    if(isset($_SESSION[user])){
        $opcion='true';
    }

    $item= new Especial\TextArea('Comentario','Comentario',10,50);

    if(isset($_GET[Enviar])){
        if($item->validar($_GET)){
            $username= clean_input($_SESSION[user]);
            $fecha= date('d/m/y');
            $comentario=clean_input($_GET[$item->getName()]);
            $consulta_userid=$mysql->prepare("SELECT * FROM usuario WHERE username = :username LIMIT 1");
            $consulta_userid->execute([':username' => $_SESSION['user']]);
            $userid=$consulta_userid->fetch();

            $consulta_foroid=$mysql->prepare("SELECT * FROM creaforo WHERE userid = :userid LIMIT 1");
            $consulta_foroid->execute([':userid' => $userid['userid']]);
            $foroid=$consulta_foroid->fetch();
            $file=$_SESSION['user'].$userid['userid'].$foroid['foroid'];
            $ruta="../Comentario/$file.csv";
            $consulta_1=$mysql->prepare("SELECT * FROM hacecomentario WHERE direccion = :direccion LIMIT 1");
            $consulta_1->execute([':direccion' => $ruta]);
            $direccion=$consulta_1->fetch();
            if(isset($direccion['direccion'])){
                $contenidos=$username.";".$fecha.";".$comentario."\n";
                file_put_contents($direccion['direccion'],$contenidos,FILE_APPEND);
            }else{
                $consulta_2=$mysql->prepare('INSERT INTO hacecomentario (direccion) VALUES(:direccion)');
                $consulta_2->bindParam(':direccion',$ruta);
                $consulta_2->execute();
                $contenidos=$username.";".$fecha.";".$comentario."\n";
                file_put_contents($ruta,$contenidos,FILE_APPEND);
            }
        }
    }

    function pintacomentario($valor){
        if($valor==null && !isset($_GET)){
            global $ruta;
            $data = file_get_contents($ruta);
        }else{
            $data = file_get_contents($valor);
        }
        $data = file_get_contents($valor);
        $data = explode("\n",$data);
        array_pop($data);
        foreach($data as $key => $valor){
            $valor = explode(";",$valor);
            echo"
                <div class='comentarios'>
                    <p>".$valor[0]." - ".$valor[1]."</p>
                    <p>".$valor[2]."</p>
                </div>
            ";
        }
    }
?>