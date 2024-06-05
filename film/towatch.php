<?php

    require_once "../php_main/dbconfig.php";

    // Avvia la sessione
    session_start();

    // Verifica l'esistenza di dati POST
    if(isset($_SESSION["username"]) && $_GET["mode"] == "0" && isset($_GET['id']))
    {
        // Connetti al database
        $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
        $username = mysqli_real_escape_string($conn, $_SESSION['username']);
        $IMDbID = mysqli_real_escape_string($conn, $_GET['id']);

        $query = "SELECT * FROM towatch WHERE username LIKE '".$username."' AND IMDbID = '".$IMDbID."'";
        $res = mysqli_query($conn, $query);

        if(mysqli_num_rows($res) > 0){
            echo "1";
        } else echo "0";

    } elseif(isset($_SESSION["username"]) && isset($_GET["add"]) && $_GET["mode"] == "1") {

        $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
        $username = mysqli_real_escape_string($conn, $_SESSION['username']);
        $IMDbID = mysqli_real_escape_string($conn, $_GET['id']);

        if ($_GET["add"] == 0) $query = "INSERT INTO towatch (username, IMDbID) VALUES ('".$username."', '".$IMDbID."')";
                else $query = "DELETE FROM towatch WHERE username = '".$username."' AND IMDbID = '".$IMDbID."'";
        echo $query;
        $res = mysqli_query($conn, $query);
    }
?>