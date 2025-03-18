<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registrati</title>
</head>
<body>
    <?php
        if(isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['age'])){
            echo "<div class='container'>";
                echo "Ti sei registrato con successo!" . "<br>" . "<br>";
                echo "Il tuo nome è " . $_POST['name'] . "<br>";
                echo "Il tuo cognome è " . $_POST['lastname'] . "<br>";
                echo "La tua età è " . $_POST['age'] . "<br>";
            echo "</div>";
        }
    ?>
</body>
</html>