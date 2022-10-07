<?php
    $tarea=[
        "Lavar Ropa",
        "Cocinal",
        "Barrir",
        "Hacer Cama",
        "Hacer Compra",
    ];
    $persona=[
        "Papa",
        "Mama",
        "Hijo",
    ];

    print("Array ante de aleatorio: <br>");
    print_r($tarea);

    $Clave_R=array_rand($tarea,3);
    print("<br><br> Array aleatorio: <br>");
    for($i=0; $i<count($Clave_R); $i++){
        print(" ".$tarea[$Clave_R[$i]]." ");
    }

    print("<br><br> Tarea aleatorio para la familia: <br>");

    for($i=0; $i<count($Clave_R); $i++){
        $tarea_D[$i]=$tarea[$Clave_R[$i]];
    }
    $Tarea_F=array_combine($persona,$tarea_D);
    $claves=array_keys($Tarea_F);

    for ($i=0; $i < count($Clave_R); $i++) { 
        print($claves[$i]. "se encarga de: ".$Tarea_F[$claves[$i]]."<br>");
    }
?>