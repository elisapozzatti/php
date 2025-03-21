<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Auto</title>
</head>
<body>
<?php
    $host = "localhost:3306";  
    $user = "root";
    $password = "";
    $db_name = "macchine";

    $conn = mysqli_connect($host, $user, $password, $db_name);

    if(!$conn){
        die("connessione fallita: " . mysqli_connect_error());
    }else{
        echo "connessione avvenuta con successo" . "<br>";
    }

    $auto = [];

    if(isset($_POST['marca']) && isset($_POST['modello']) && isset($_POST['carburante']) && isset($_POST['targa']) && isset($_POST['proprietario'])){
        $marca = $_POST['marca'];
        $modello = $_POST['modello'];
        $carburante = $_POST['carburante'];
        $targa = $_POST['targa'];
        $proprietario = $_POST['proprietario'];

        $query = "INSERT INTO automobili(marca, modello, carburante, targa, proprietario) VALUES(?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, 'sssss', $marca, $modello, $carburante, $targa, $proprietario);

        if(mysqli_stmt_execute($stmt)){
            echo "auto aggiunta correttamente!";
        }else{
            echo "errore nell'inserimento dell'auto: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    }

    $query = "SELECT * FROM automobili";
    $result = mysqli_query($conn, $query);
    $auto = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_close($conn);
?>
<table>
        <thead>
        <tr>
            <th>Marca</th>
            <th>Modello</th>
            <th>Carburante</th>
            <th>Targa</th>
            <th>Proprietario</th>
        </tr> 
        </thead> 
        <?php
            echo "<tbody>";
            foreach($auto as $auto_item){
                echo "<tr>";
                    echo "<td>" . $auto_item['marca'] . "</td>";
                    echo "<td>" . $auto_item['modello'] . "</td>";
                    echo "<td>" . $auto_item['carburante'] . "</td>";
                    echo "<td>" . $auto_item['targa'] . "</td>";
                    echo "<td>" . $auto_item['proprietario'] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
        ?>
    </table>
</body>
</html>
