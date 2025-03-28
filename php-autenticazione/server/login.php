<?php
    $db_host = 'localhost:3306';
    $db_name = 'auth';
    $db_user = 'root';
    $db_password = '';

    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if(!$conn){
        echo "Errore di connessione!";
    }

    if(isset($_POST["username"]) && isset($_POST["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = "SELECT * FROM users WHERE username = ?";

        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        $user = mysqli_fetch_assoc($result);

        if($user || password_verify($password, $user)){
            echo "posso loggarmi";
            //mi loggo, creo la sessione
        }else{
            echo "credenziali errate bro mi dispiace";
        }
    }
?>