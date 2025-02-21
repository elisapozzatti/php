<?php
/* Modifica l'URL aggiungendo `?nome=Gino` e fai in modo che il PHP stampi:  
`Ciao Gino!`
Se il parametro `nome` non è presente, stampa un messaggio di default come:
`Ciao Sconosciuto!`*/
    if(isset($_GET["nome"])){
        $nome = $_GET["nome"];
    } else{
        $nome = "sconosciuto";
    }
    echo "ciao $nome!"
?>