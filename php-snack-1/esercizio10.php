<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Pagina con immagine condizionata
    - Crea una variabile `$orario` e assegnale un numero tra 0 e 23.  
    - Se `$orario` è minore di 12, mostra un’immagine di un sole.  
    - Se `$orario` è maggiore o uguale a 12, mostra un’immagine di una luna.</p>
    <?php
        $orario = "10";
    ?>
    <?php 
        if ($orario<12):
    ?>
    <img style="width: 200px; height: 200px;" src="assets/sun.webp">
    <?php
        else:
    ?>
    <img style="width: 200px; height: 200px;" src="assets/moon.avif">
    <?php endif ?>
</body>
</html>