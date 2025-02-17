<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Uso di PHP dentro HTML
    Crea una pagina HTML con un titolo h1 che contiene un messaggio generato da PHP.</p>
    <?php
        $messaggio = "messaggio";
    ?>
    <h1><?php echo $messaggio ?></h1>
</body>
</html>