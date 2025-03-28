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
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

        //controllo se l'username è gia esistente
        $queryCheckUser = "SELECT * FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $queryCheckUser);
        mysqli_stmt_bind_param($stmt, "s", $username);

        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_stmt_affected_rows($stmt)>0){
            echo "username già esistente";
            //rimandiamo al login
        }else{
            //creo il nuovo utente
            $query = "INSERT INTO users(username, password) VALUES (?, ?)";

            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, "ss", $username, $password);
            mysqli_stmt_execute($stmt);

            if(mysqli_stmt_affected_rows($stmt)>0){
                $msg = "Registrazione avvenuta con successo";
            }else{
                $msg = "Problemi con l'inserimento dei dati";
            }

            echo $msg;
        }

        
    }
?>