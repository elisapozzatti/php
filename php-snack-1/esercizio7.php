<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Inserire variabili PHP dentro HTML
    - Crea tre variabili PHP (`$titolo`, `$sottotitolo`, `$descrizione`).  
    - Stampa questi valori all’interno di una pagina HTML nei rispettivi tag (h1, h2, p).</p>
    <?php
        $titolo = "titolo";
        $sottotitolo = "sottotitolo";
        $descrizione = "loremipsumloremipsumloremipsumloremipsumloremipsum";
    ?>
    <h1><?php echo $titolo; ?></h1>
    <h2><?php echo $sottotitolo; ?></h2>
    <p><?php echo $descrizione; ?></p>
</body>
</html>