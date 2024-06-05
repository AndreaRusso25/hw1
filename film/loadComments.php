
<?php
    require_once "../php_main/dbconfig.php";

    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);

    if(isset($_GET['IMDbID'])){
        $id = mysqli_real_escape_string($conn, $_GET['IMDbID']);
        $query = "SELECT * FROM comments WHERE film = '".$id."' ORDER BY date";
        $res = mysqli_query($conn, $query);

        if(mysqli_num_rows($res) == 0) {
            echo json_encode([]);
        } else {
            $rows = array();
            while($row = mysqli_fetch_assoc($res)) {
                $rows[] = $row;
            }
            echo json_encode($rows);
        }
    }
?>