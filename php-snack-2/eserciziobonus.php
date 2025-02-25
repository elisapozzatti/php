<?php
    $cani = [
        ["nome" => "Buddy", "razza" => "Labrador", "eta" => 10],
        ["nome" => "Max", "razza" => "Beagle", "eta" => 15],
        ["nome" => "Luna", "razza" => "Husky", "eta" => 7],
        ["nome" => "Pino", "razza" => "Beagle", "eta" => 5],
        ["nome" => "Gino", "razza" => "Labrador", "eta" => 11],
    ];

    $etaminima = isset($_GET["eta"]) && is_numeric($_GET["eta"]) ? (int) $_GET["eta"]: null;
    if($etaminima !== null){
        $cani = array_filter($cani, function($cane) use ($etaminima){
            return $cane["eta"] >= $etaminima;
        });
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php dogs</title>
</head>
<body>
    <h1>Elenco di cani</h1>
    <?php if ($etaminima !== null): ?>
        <p>Mostro cani dai <?php echo $etaminima; ?> anni in su.</p>
    <?php endif; ?>
    <table border=1>
        <tr>
            <th>Nome</th>
            <th>Razza</th>
            <th>Età</th>
        </tr>
        <?php foreach($cani as $cane): ?>
            <tr>
                <td><?php echo $cane["nome"]; ?></td>
                <td><?php echo $cane["razza"]; ?></td>
                <td><?php echo $cane["eta"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>