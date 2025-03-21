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
        echo "connessione avvenuta con successo";
    }

    $auto = [];

    if(isset($_POST['carburante']) && isset($_POST['marca'])){
        $carburante = $_POST['carburante'];
        $marca = $_POST['marca'];

        if($carburante == "tutto" && $marca != "tutto"){
            $query = "SELECT * FROM automobili WHERE marca = ?";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, 's', $marca);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $auto = mysqli_fetch_all($result, MYSQLI_ASSOC);
            mysqli_stmt_close($stmt);
        }else if($marca == "tutto" && $carburante != "tutto"){
            $query = "SELECT * FROM automobili WHERE carburante = ?";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, 's', $carburante);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $auto = mysqli_fetch_all($result, MYSQLI_ASSOC);
            mysqli_stmt_close($stmt);
        }else if ($marca != "tutto" && $carburante != "tutto") {
            $query = "SELECT * FROM automobili WHERE marca = ? AND carburante = ?";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, 'ss', $marca, $carburante);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $auto = mysqli_fetch_all($result, MYSQLI_ASSOC);
            mysqli_stmt_close($stmt);
        }else if($marca == "tutto" && $carburante == "tutto"){
            $query = "SELECT * FROM automobili";
            $result = mysqli_query($conn, $query);
            $auto = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }        
    }

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