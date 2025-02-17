<?php
    /*Array associativo
    - Crea un array associativo con le informazioni di una persona (`nome`, `età`, `città`).  
    - Stampa queste informazioni in una frase.  */

    $persona = array(
        "nome" => "elisa",
        "eta" => "20",
        "citta" => "verona"
    );
    echo "mi chiamo {$persona["nome"]}, ho {$persona["eta"]} e vivo a {$persona["citta"]}";
?>