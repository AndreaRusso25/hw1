
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="agenda.css">
        <script src="agenda.js" defer = "true"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Manrope:wght@200..800&family=Ramabhadra&family=Spline+Sans+Mono:ital,wght@0,300..700;1,300..700&family=Yantramanav:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,0" />
    </head>
    <body>
        <nav>
            <a href = "../index.php" id = "home-nav">Home</a>
            <a href = "../lecosmos/lecosmos.php" id = "lecosmos-nav">Le Cosmos</a>
            <a id = "agenda-nav">Agenda</a>
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
        <main>
            <div class = "date_agenda">
                <h1>
                    OGGI IN PROGRAMMAZIONE
                </h1>
                <h2>
                    <?php echo "(".date('d-m-Y').")" ?>
                </h2>
            </div>
            <?php

                require_once "../php_main/dbconfig.php";

                $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
                $date = mysqli_escape_string($conn, date('Y-m-d'));
                $query = "SELECT * , TIME_FORMAT(Time, '%H:%i') AS Time_f FROM CinemaSchedule WHERE Date = '".$date."' ORDER BY Time";

                $res = mysqli_query($conn, $query);

                if(mysqli_num_rows($res) == 0) {
                    echo '
                        <div> <h1> <span class = "higlight">PROGRAMMAZIONE NON DISPONIBILE</span> <h1> </div>
                    ';
                }

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
                        <a href = "../film/film.php?id='.$row['IMDbID'].'">
                            <div class = "film" data-IMDbID = "'.$row['IMDbID'].'">
                                <img src="https://image.tmdb.org/t/p/w400/' . $film['poster_path'] . '" alt="">
                                <div class = "descrizione">
                                    <h2>
                                        <span class = "highlight">' . $film['original_title'] . '</span>
                                        <span class="material-symbols-outlined">
                                            arrow_forward
                                        </span>
                                        ' . $row['Time_f'] . '
                                        <span class = "room"> sala '.$row['Room'].' </span>
                                    </h2>
                                    <h3>score: ' . $film['vote_average'] . '</h3>
                                    <p>' . $film['overview'] . '</p>
                                </div>
                            </div>
                        </a>';

                    }

                }

                $query = "SELECT *, DATE_FORMAT(Date, '%a %e %b') AS Date_f, TIME_FORMAT(Time, '%H:%i') AS Time_f FROM CinemaSchedule WHERE Date >= '".$date."' ORDER BY Date";

                $res = mysqli_query($conn, $query);

                echo '<div class = "all-agenda">';

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
                        <a href = "../film/film.php?id='.$row['IMDbID'].'">
                            <div class = "film" data-IMDbID = "'.$row['IMDbID'].'">
                                <div class = "descrizione">
                                    <h2>
                                        <span class = "highlight">' . $film['original_title'] . '</span>
                                        '.$row['Date_f'].'
                                        <span class="material-symbols-outlined">
                                            arrow_forward
                                        </span>
                                        ' . $row['Time_f'] .'
                                        </span>
                                    </h2>
                                </div>
                            </div>
                        </a>';

                    }
                }

                echo '</div>';

                // Chiudi
                mysqli_free_result($res);
                mysqli_close($conn);

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