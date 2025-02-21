<?php
    /*Scrivi uno script PHP che prenda un numero da `$_GET` (es: `?min=5`) e stampi tutti i numeri da questo `min` fino a 20.  
    Se `min` non è fornito, il valore di default è `1`.  
    Esempio:
    Dato: `?min=15` stampa: `15, 16, 17, 18, 19, 20`.
    Dato: `?min=5` stampa: `5, 6, 7, ..., 18, 19, 20`.
    Dato: `?min= 21` stampa messaggio: `Numero deve essere <= 20`.*/

    if($_GET["numero"]){
        $numero = $_GET["numero"];
        for($i=$numero; $i<21; $i++){
            echo $i;
        }
    }else{
        for($i=1; $i<21; $i++){
            echo $i;
        }
    }
?>