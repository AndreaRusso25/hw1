<?php

    require_once "../php_main/dbconfig.php";
    $curl = curl_init();
    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
    $id = mysqli_real_escape_string($conn, $_GET["id"]);

    curl_setopt_array($curl, [
    CURLOPT_URL => "https://api.themoviedb.org/3/find/".$_GET['id']."?external_source=imdb_id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "Authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI2OWViZTU0OGMxZWZmZjM4MGE1MTBlMDAwZWM2MzliNiIsInN1YiI6IjY2MzJkNTg5YzYxNmFjMDEyYTE4YjQwNiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.H-1akhqpT9RtKjqe4TFsJUh-uDPOqY4a_pwFwID0wxY",
        "accept: application/json"
    ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        $film = json_decode($response, true);
        $film = $film['movie_results'][0];
    }

    $curl = curl_init();

    curl_setopt_array($curl, [
    CURLOPT_URL => "https://api.themoviedb.org/3/movie/".$film['id']."/credits?language=en-US",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "Authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI2OWViZTU0OGMxZWZmZjM4MGE1MTBlMDAwZWM2MzliNiIsInN1YiI6IjY2MzJkNTg5YzYxNmFjMDEyYTE4YjQwNiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.H-1akhqpT9RtKjqe4TFsJUh-uDPOqY4a_pwFwID0wxY",
        "accept: application/json"
    ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        $cast_data = json_decode($response, true);
        for ($i = 0; $i < count($cast_data['crew']); $i++){
            if($cast_data['crew'][$i]['job'] == "Director") $director = $cast_data['crew'][$i]['name'];
        }
    }

    $curl = curl_init();

    curl_setopt_array($curl, [
    CURLOPT_URL => "https://api.themoviedb.org/3/movie/".$film['id']."/videos?language=en-US",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "Authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI2OWViZTU0OGMxZWZmZjM4MGE1MTBlMDAwZWM2MzliNiIsInN1YiI6IjY2MzJkNTg5YzYxNmFjMDEyYTE4YjQwNiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.H-1akhqpT9RtKjqe4TFsJUh-uDPOqY4a_pwFwID0wxY",
        "accept: application/json"
    ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        $videos = json_decode($response, true);

        for ($i = 0; $i < count($videos['results']); $i++){
            if($videos['results'][$i]['type'] == "Trailer") {
                $trailer = $videos['results'][$i]['key'];
                break;
            }
        }   
    }

?>

<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="film.css">
        <script src="film.js" defer></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Manrope:wght@200..800&family=Ramabhadra&family=Spline+Sans+Mono:ital,wght@0,300..700;1,300..700&family=Yantramanav:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,0" />
    </head>
    <body>
        <nav>
            <a id = "home-nav">Home</a>
            <a href = "../lecosmos/lecosmos.php" id = "lecosmos-nav">Le Cosmos</a>
            <a href = "../agenda/agenda.php" id = "agenda-nav">Agenda</a>
            <div class = "spacer"></div>
            <?php

                // Avvia la sessione
                session_start();
                // Verifica se l'utente è loggato
                if(!isset($_SESSION['username'])) echo '<a href = "../login/login.php" id = "login"> Accedi </a>';
                    else echo ' <a id = "login_t"> Ciao, '.$_SESSION['username'].' </a>
                                    <div class = "dropdown">
                                        <a href = "../mycosmos/mycosmos.php">MyCosmos</a>
                                        <a href = "../php_main/logout.php">Logout</a>
                                    </div>
                    ';

            ?>
        </nav>
        <header>
        <?php
            if(isset($film['backdrop_path'])) echo ' <img src = "https://image.tmdb.org/t/p/original/'.$film["backdrop_path"].'" >';
            echo ' <div class = "showcase-info">
                <div>
                    <h1 id = "big-title">'.$film["original_title"].'</h1>
                    <h3 id = "director">film di '.$director.'</h3>
                </div>
            ';

            if(isset($_SESSION['username'])){
                echo "  <form action = './towatch.php' class = 'watchlist' name = 'watchlist-form' method = 'post'>
                            <input type='hidden' name='id' value='".$_GET['id']."' />
                            <input type='hidden' name='add' value='0' />
                            <button id = 'watchlist-status' type='submit'>

                            </button>
                        </form>
                    ";
            }

            echo '
            </div>
        </header>
        <main>
            <div class = "agenda">';
        
        $date = mysqli_real_escape_string($conn, date('Y-m-d'));
        $query = "SELECT *, DATE_FORMAT(Date, '%a %e %b') AS Date_f, TIME_FORMAT(Time, '%H:%i') AS Time_f FROM CinemaSchedule WHERE IMDbID = '".$id."'  AND Date >= '".$date."' ORDER BY Date";
        $res = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($res)){

            $curl = curl_init();

            curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.themoviedb.org/3/find/".$row['IMDbID']."?external_source=imdb_id",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI2OWViZTU0OGMxZWZmZjM4MGE1MTBlMDAwZWM2MzliNiIsInN1YiI6IjY2MzJkNTg5YzYxNmFjMDEyYTE4YjQwNiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.H-1akhqpT9RtKjqe4TFsJUh-uDPOqY4a_pwFwID0wxY",
                "accept: application/json"
            ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
            echo "cURL Error #:" . $err;
            } else {
                $film = json_decode($response, true);
                $film = $film['movie_results'][0];
                echo '
                <div class = "film">
                        <p>'.$row['Date_f'].'</p>
                        <p>' . $row['Time_f'] .'</p>
                        <p>room '.$row['Room'].'</p>
                </div>
                ';

            }
        }

        echo '
        </div>
            <h2>TRAMA</h2>
            <p>'.$film['overview'].'</p>
            <br>
            <h2>TRAILER</h2>
            <iframe src="https://www.youtube.com/embed/'.$trailer.'"></iframe>
            <h2>COMMENTI</h2>
            ';

            $query = "SELECT * FROM comments WHERE film = '".$id."' ORDER BY date";

            $res = mysqli_query($conn, $query);

            if(mysqli_num_rows($res) == 0) {
                echo '
                    <h3>ancora nessun commento</h3>
                ';
            }

            echo "<div class = 'comment-show'></div>";

            if(!isset($_SESSION['username'])){
                echo '
                <h2>ACCEDI PER DIRE LA TUA</h2>
                ';
            } else {
                echo "
                <h1>SCRIVI COSA NE PENSI</h1>
                <form name='comment-form' method = 'post'>
                    <input type='hidden' name='IMDbID' value=".$_GET['id']." />
                    <div>
                        <label><input id = 'text' type='text' name='comment' placeholer = 'dicci la tua!'></label>
                    </div>
                    <p id = 'requirements'>max 200, min 1 carattere</p>
                    <p>
                        <label>&nbsp;<input id = 'send' type='submit' id ='send'></label>
                    </p>
                </form>
                ";
            }
            echo "  <form name='id-form' method = 'post'>
                        <input type='hidden' name='IMDbID' value=".$_GET['id']." />
                    </form>";
        ?>
        </main>
        <footer>
            <div class = "top-bar-footer">
                <a id = "frequent-questions">Domande frequenti</a>
                <a href = "#" id = "newsletter">Newsletter</a>
                <a href = "mailto:agora@cinema-cosmos.eu" id = "contacts">Contatti</a>
            </div>
            <div class = "bottom-bar-footer">
                <img src="../img/logo-small.svg" alt="">
                <p>
                    Avete domande? <br>
                    Non esitate <br>
                    a scriverci all'indirizzo <br>
                    <a href="mailto:agora@cinema-cosmos.eu">agora@cinema-cosmos.eu</a>
                </p>
                <p>
                Cinéma Cosmos <br>
                3, rue des Francs-Bourgeois <br>
                67 000 Strasbourg <br>
                03 92 10 07 60 <br>
                </p>
                <div class = "legal-privacy">
                    <a>Menzioni Legali</a>
                    <a>Politiche di privacy</a>
                    <div class = "social">
                        <a href="https://www.facebook.com/cinemalecosmos" target="_blank">
                            <img src="../img/icon-facebook.svg" alt="">
                        </a>
                        <a href="https://www.instagram.com/cinemalecosmos/" target="_blank">
                            <img src="../img/icon-instagram.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class = "logos">
                    <img src="../img/DRAC.svg" alt="">
                    <img src="../img/strasbourg.png" alt="">
                </div>
            </div>
        </footer>
    </body>
</html>