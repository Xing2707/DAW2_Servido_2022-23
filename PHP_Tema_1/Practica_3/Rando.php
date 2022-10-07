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
        "Abuela",
    ];

    print("Array ante de aleatorio: <br>");
    print_r($tarea);

    $tarea2=array_rand($tarea,4);
    print("<br> Array aleatorio: <br>");
    print_r($tarea2);
?>