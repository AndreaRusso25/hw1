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
        // Connetti al database
        $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
        
        // Cerca utenti con quelle credenziali
		$username = mysqli_escape_string($conn, $_POST['username']);
		$password = mysqli_escape_string($conn, $_POST['password']);

		$query = "SELECT * FROM users WHERE username = '" . $username . "' AND password = BINARY '" .$password."'";
        $res = mysqli_query($conn, $query);

        // Verifica la correttezza delle credenziali
       if(mysqli_num_rows($res) > 0)
        {
            // Imposta la variabile di sessione
            $_SESSION["username"] = $_POST["username"];

            // Vai alla pagina home_db.php
            header("Location: ../index.php");
            exit;
        }
        else
        {
            // Flag di errore
            $errore = true;
        }
    }

?>

<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="login.css">
        <script src="login.js" defer = "true"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Manrope:wght@200..800&family=Ramabhadra&family=Spline+Sans+Mono:ital,wght@0,300..700;1,300..700&family=Yantramanav:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,0" />
    </head>
    <body>
        <header>
            <a href="../index.php"><h1>LE COSMOS</h1></a>
            <h2>login</h2>
        </header>
        <main>
            <?php
                // Verifica la presenza di errori
                if(isset($errore))
                {
                    echo "
                    <div class='error'>
                        <p>Credenziali non valide.</p>
                    </div>";
                }
            ?>
            <form name='login-form' method='post'>
                <div>
                    <label><input type='text' name='username'><br><h1>NOME UTENTE</h1></label>
                </div>
                <div>
                    <label><input type='password' name='password'><br><h1>PASSWORD</h1></label>
                </div>
                <p>
                    <label>&nbsp;<input type='submit' id ='send'></label>
                </p>
            </form>
            <a href="../register/register.php">Non hai un account? Registrati!</a>
        </main>
    </body>
</html>