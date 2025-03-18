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
    <link rel="stylesheet" href="stile.css">
    <title>Auto</title>
</head>
<body>
    <div class="containerfiltra">
    <form method="POST" action="filtra.php">
    <select name="marca">
        <option value="ferrari">ferrari</option>
        <option value="porsche">porsche</option>
        <option value="mclaren">mclaren</option>
        <option value="audi">audi</option>
        <option value="ford">ford</option>
        <option value="aston martin">aston martin</option>
        <option value="bentley">bentley</option>
        <option value="renault">renault</option>
        <option value="nissan">nissan</option>
        <option value="lamborghini">lamborghini</option>
        <option value="chevrolet">chevrolet</option>
        <option value="toyota">toyota</option>
        <option value="mazda">mazda</option>
        <option value="bugatti">bugatti</option>
        <option value="pagani">pagani</option>
        <option value="tutto">tutto</option>
    </select>
    <select name="carburante">
        <option value="benzina">benzina</option>
        <option value="diesel">diesel</option>
        <option value="gpl">gpl</option>
        <option value="tutto">tutto</option>
    </select><br>
    <button type="submit">Filtra</button><br>
    </form>
    </div>
    <section>
    <table>
        <?php 
        //creo la query
        $query = "SELECT * FROM automobili";
        //lancio la query
        $result = mysqli_query($conn, $query);

        //prendo tutte le righe della query come array
        $auto = mysqli_fetch_all($result, MYSQLI_ASSOC);
        ?>
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
    </section>
</body>
</html>