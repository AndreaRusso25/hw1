<?php

    require_once "../php_main/dbconfig.php";

    // Avvia la sessione
    session_start();
    // Verifica l'accesso
    if(isset($_SESSION["username"]))
    {
        // Vai alla home
        header("Location: ../index.php");
        exit;
    }
    // Verifica l'esistenza di dati POST
    if(isset($_POST["username"]) && isset($_POST["password"]))
    {
        if(!(strlen($_POST["username"]) > 20 || !preg_match('/[a-zA-Z]/', $_POST["password"]) || !preg_match('/[\d\W]/', $_POST["password"]) || strlen($_POST["password"]) < 5 || strlen($_POST["password"]) > 20)) {
            // Connetti al database
            $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
            
            // Cerca utenti con quelle credenziali
            $username = mysqli_escape_string($conn, $_POST['username']);
            $password = mysqli_escape_string($conn, $_POST['password']);

            $query = "SELECT * FROM users WHERE username = '" . $username . "'";
            $res = mysqli_query($conn, $query);

            // Verifica se esiste già il nome utente
        if(mysqli_num_rows($res) > 0)
            {
                // Flag di errore
                $errore = true;
            }
            else
            {
                $query = "INSERT INTO users (username, password) VALUES ('".$username."', '".$password."')";
                $res = mysqli_query($conn, $query);
                $_SESSION["username"] = $username;
                header("Location: ../index.php");
            }
        } else $errore = true;
    }
    
?>

<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="register.css">
        <script src="register.js" defer = "true"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Manrope:wght@200..800&family=Ramabhadra&family=Spline+Sans+Mono:ital,wght@0,300..700;1,300..700&family=Yantramanav:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,0" />
    </head>
    <body>
        <header>
            <a href="../index.php"><h1>LE COSMOS</h1></a>
            <h2>register</h2>
        </header>
        <main>
            <?php
                // Verifica la presenza di errori
                if(isset($errore))
                {
                    echo "
                    <div class='error'>
                        <p>Nome utente già esistente.</p>
                    </div>";
                }
            ?>
            <form name='register-form' method='post'>
                <div>
                    <label><input type='text' name='username'><br>
                    <h1>NOME UTENTE&nbsp&nbsp&nbsp&nbsp</h1><p id = "user-req">max 20 caratteri</p>
                    </label>
                </div>
                <div>
                    <label><input type='password' name='password'><br>
                    <h1>PASSWORD&nbsp&nbsp&nbsp&nbsp</h1><p id = "pwd-req">5 - 20 caratteri, almeno 1 carattere speciale o numero</p>
                    </label>
                </div>
                <p>
                    <label>&nbsp;<input type='submit' id ='send'></label>
                </p>
            </form>
            <a href="../login/login.php">Hai già un account? Accedi!</a>
        </main>
    </body>
</html>