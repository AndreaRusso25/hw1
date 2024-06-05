<?php

require_once "../php_main/dbconfig.php";

// Avvia la sessione
session_start();
// Verifica l'accesso
if(!isset($_SESSION["username"]))
{
    // Vai alla home
    header("Location: ../index.php");
    exit;
}

// Verifica l'esistenza di dati POST
if(isset($_GET["IMDbID"]) && isset($_GET["comment"]) && strlen($_GET["comment"]) < 200 && strlen($_GET["comment"]) > 0)
{
    // Connetti al database
    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);

    $comment = mysqli_real_escape_string($conn, $_GET['comment']);
    $username = mysqli_real_escape_string($conn, $_SESSION['username']);
    $IMDbID = mysqli_real_escape_string($conn, $_GET['IMDbID']);

    $query = "INSERT INTO comments (user, content, film, date) VALUES ('".$username."', '".$comment."', '".$IMDbID."', '".date('Y-m-d')."')";
    $res = mysqli_query($conn, $query);
    
}

?>