<?php
/*Stampare le chiavi e i valori usando un ciclo `foreach`.
```php
$persona = [
    "nome" => "Gino",
    "cognome" => "Panino",
    "eta" => 25
];*/
    $persona = [
        "nome" => "Gino",
        "cognome" => "Panino",
        "eta" => 25
    ];
    foreach($persona as $chiave => $valore){
        var_dump("$chiave: $valore <br> ");
    }
?>