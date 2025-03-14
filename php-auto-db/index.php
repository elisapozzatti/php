<?php
    $host = "localhost:3306";  
    $user = "root";
    $password = "";
    $db_name = "macchine";

    $conn = mysqli_connect($host, $user, $password, $db_name);

    if(!$conn){
        die("connessione fallita: " . mysqli_connect_error());
    }else{
        echo "connessione avvenuta con successo";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Auto</title>
</head>
<body>
    <h4>
        <?php 
        //creo la query
        $query = "SELECT * FROM automobili";
        //lancio la query
        $result = mysqli_query($conn, $query);

        //prendo tutte le righe della query come array
        $auto = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach($auto as $auto_item){
            echo "Marca: " . $auto_item['marca'] . "<br>";
            echo "Modello: " . $auto_item['modello'] . "<br>";
            echo "Carburante: " . $auto_item['carburante'] . "<br>";
            echo "Targa: " . $auto_item['targa'] . "<br>";
            echo "Proprietario: " . $auto_item['proprietario'] . "<br><br><br>";
        } 
        ?>
        <select name="carburante">
            <option value="benzina">benzina</option>
            <option value="diesel">diesel</option>
            <option value="gpl">gpl</option>
    </h4>
</body>
</html>