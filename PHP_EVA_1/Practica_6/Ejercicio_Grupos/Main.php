<?php
    $errores=[];

    spl_autoload_register( function ($class){
        $classPath="./";
        require("$classPath${class}.php");
    });

    print_r($_POST);

    if(isset($_POST['Enviar'])){
        $sexo=new Radio();
        if($sexo -> validar($_POST)){
            $sexo-> setSexo($_POST['Sexo']);
        }else{
            array_push($errores,$sexo->error());
            print($errores[0]."<br>");
        }

        $hobby=new Checkbox();
        if($hobby->validar($_POST)){
            $hobby->setHobby($_POST['Hobby']);

            print("Tus hobbys es: ".$hobby->getHobby());
        }else{
             array_push($errores,$hobby->error());
             print($errores[1]);
        }

        $descripcion=new Textarea();
        if($descripcion->validar($_POST['Descripcion'])){
            $descripcion->setDescripcion($_POST['Descripcion']);
            print("Sobre ti:" .$descripcion->getDescripcion());
        }else{
            array_push($errores,$descripcion->error());
            print($errores[2]);
        }

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
    <form action="" method="post">
        Hombre <input type="radio" name="Sexo" value="hombre" id="hombre">
        Mujer <input type="radio" name="Sexo" value="mujer" id="mujer">
        Otros <input type="radio" name="Sexo" value="otros" id="otros">
        <br>
        Lectura<input type="checkbox" name="Hobby[]" value="Lectura" id="Lectura"/>
        VideoJuego<input type="checkbox" name="Hobby[]" value="VideoJuego" id="VideoJuego"/>
        Cine<input type="checkbox" name="Hobby[]" value="Cine" id="Cine"/><br>

        <textarea name="Descripcion" value="Detalla mas tus hobbys u otros hobbys"></textarea>
        <input type="submit" name="Enviar" value="Enviar"/>
    </form>
</body>
</html>