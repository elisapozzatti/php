<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Pagina HTML con condizioni in PHP
    - Crea una variabile `$isOnline` che può essere `true` o `false`.  
    - Se è `true`, stampa un messaggio verde con `"Utente online"`.  
    - Se è `false`, stampa un messaggio rosso con `"Utente offline"`.  
    - Usa p style=color: green; e p style=color: red; per formattare il testo.</p>
    <?php
        $isOnline = "false";
    ?>
    <?php if($isOnline=="true"): ?>
        <p style="color: green;">Utente online</p>
    <?php else: ?>
        <p style="color: red;">Utente offline</p>
    <?php endif; ?>
</body>
</html>