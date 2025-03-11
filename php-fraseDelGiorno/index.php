<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "./partials/header.php"; ?>
    <h1>Daily Quote</h1>
    <?php
        $data = date("Y-m-d");
        echo $data . "<br>";
    ?>
    <?php 
        include "./utility/random_message.php";
        $quote = getRandomMessage();
        echo $quote;
    ?>
    <?php include "./partials/footer.php"; ?>
</body>
</html>