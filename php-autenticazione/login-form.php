<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registrati.css">
    <title>login</title>
</head>
<body>
    <h1>ACCEDI</h1>
    <form class="container" method="POST" action="server/login.php">
        <div class="kid">
        <label>username</label>
        <input type="text" name="username">
        </div>

        <div class="kid">
        <label>password</label>
        <input type="password" name="password">
        </div>

        <div class="kid">
        <button type="submit">invia</button>
        </div>
    </form>
</body>
</html>