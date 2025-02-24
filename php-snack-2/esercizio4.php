<?php
/*Funzione quadrato()
Scrivi una funzione PHP chiamata `quadrato($numero)` che riceve un numero e restituisce il suo quadrato.  
Esempio: `quadrato(4)` → Output: `16` */
    function quadrato($numero){
        return $numero*$numero;
    }
    echo quadrato($_GET["numero"]);
?>