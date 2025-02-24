<?php
/*Dato l'array di numeri:  
```php
$numeri = [1, 2, 3, 4, 5];
```
Usa `array_map` per ottenere un nuovo array con il **doppio** di ogni numero e <stampalo"*/
    $numeri = [1, 2, 3, 4, 5];
    $doppio = array_map(function($numero){
        return $numero *2;
    }, $numeri);
    var_dump($doppio);
?>