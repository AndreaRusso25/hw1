<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
        <script src="main.js" defer></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Manrope:wght@200..800&family=Ramabhadra&family=Spline+Sans+Mono:ital,wght@0,300..700;1,300..700&family=Yantramanav:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,0" />
    </head>
    <body>
        <nav>
            <a id = "home-nav">Home</a>
            <a href = "./lecosmos/lecosmos.php" id = "lecosmos-nav">Le Cosmos</a>
            <a href = "./agenda/agenda.php" id = "agenda-nav">Agenda</a>
            <div class = "spacer"></div>
            <?php

                // Avvia la sessione
                session_start();
                // Verifica se l'utente è loggato
                if(!isset($_SESSION['username'])) echo '<a href = "./login/login.php" id = "login"> Accedi </a>';
                    else echo ' <a id = "login_t"> Ciao, '.$_SESSION['username'].' </a>
                                    <div class = "dropdown">
                                        <a href = "./mycosmos/mycosmos.php">MyCosmos</a>
                                        <a href = "./php_main/logout.php">Logout</a>
                                    </div>
                    ';

            ?>
        </nav>
        <div class = "big-logo"></div>
        <header>
            <div class = "showing">
                <div class = "spacer"></div>
                <div class = "theme">
                    <div class = "dates">
                        10.04
                        <span class="material-symbols-outlined">
                            arrow_forward
                        </span>
                        04.06
                    </div>
                    <a class = "theme-title">
                            Cinema e <br>
                            Letteratura
                    </a>
                    <div class = "download-agenda">
                        SCARICA IL PROGRAMMA
                    </div>
                    <div class = "description">
                        <p>
                        Nell'ambito del ruolo di Strasburgo come Capitale Mondiale del Libro UNESCO 2024, Le Cosmos propone una serie di eventi che mettono in relazione cinema e letteratura, due arti così strettamente intrecciate. Il cinema come arte profondamente aperta ad altre discipline, al servizio della narrazione.
                        </p>
                    </div>
                </div>
                <div class = "more-info">
                    <a href = "./agenda/agenda.php">PIU' INFORMAZIONI</a>
                    <span class="material-symbols-outlined">
                            arrow_forward
                        </span>
                </div>
            </div>
            <img src="./img/nav-banner.jpeg" class = "nav-banner">
        </header>
        <main>
            <h1>COS'È IL COSMOS?</h1>
            <div class = "idea-cosmos">
                <div class="material-symbols-outlined">
                    arrow_forward
                </div>
                <div>
                    Un approccio cooperativo <br>
                    Cicli tematici <br>
                    Complicità culturale <br>
                </div>
            </div>
            <div class = "idea-cosmos-description">
                <p>
                Le Cosmos è il nuovo progetto del cinema municipale di Strasburgo. Un cinema come luogo da vivere, con un bar-ristorante Le Bardu, due sale dove vedere film e vivere nuove esperienze, uno Studio dove realizzare immagini e seguire workshop, un Media Lab per produrre contenuti sonori e immagini, una Lounge dove bere un caffè, lavorare, leggere un libro o seguire un dibattito...
                </p>
                <div class = "more-info">
                    <a>PIU' INFORMAZIONI SU LE COSMOS</a>
                    <span class="material-symbols-outlined">
                            arrow_forward
                    </span>
                </div>
            </div>
            <div class = "this-week-showcase">
                <div class  = "img"></div>
                <div class = "description red-background">
                    <h3>AGENDA</h3>
                    <a class = "title">COSMOS'COOL: il festival per i bambini delle scuole</a>
                    <h2>LUNEDÌ 13 MAGGIO
                        <span class="material-symbols-outlined">
                                arrow_forward
                        </span>
                        17H
                    </h2>
                    <p>
                    Il Cinéma Le Cosmos organizza il suo primo festival per presentare i lavori prodotti dalle scuole durante l'anno scolastico 2023/2024. In questa giornata speciale, l'intero cinema sarà dedicato agli studenti e ai loro lavori. L'ingresso sarà completamente gratuito, con obbligo di registrazione sia per le proiezioni in sala che per l'area informativa. <br>
                    <br>
                    In tutto, oltre venti progetti saranno proiettati e presentati dagli stessi studenti! <br>
                    <br>
                    Ecco alcune parole degli studenti del Lycée Marc Bloch sul loro progetto di cortometraggio: <br>
                    “Abbiamo mescolato molti riferimenti ai nostri film e mondi preferiti, come Lalaland, La boum, Le fabuleux destin d'Amélie Poulain e molti altri. La nostra storia racconta di come Alice sviluppi una passione per il cinema nel corso della sua vita, insieme a un rapporto complicato con la madre, che lavora nell'industria cinematografica. Abbiamo avuto 3 giorni per girare tutto questo e anche se non è perfetto, ne siamo orgogliosi”. <br>
                    <br>
                    Venite a scoprire tutti questi meravigliosi progetti e a sostenere i cinefili di domani... <br>
                    La serata è gratuita con registrazione <br>
                    </p>
                    <div class = "more-info">
                        <a>PIU' INFORMAZIONI</a>
                        <span class="material-symbols-outlined">
                                arrow_forward
                        </span>
                    </div>
                </div>
            </div>
            <div class = "this-week-showcase">
            <div class = "description pink-background">
                <div class = "img-preview"></div>
                <h3>AGENDA</h3>
                <a class = "title">PRIX LUX DU PUBLIC : Smoke Sauna Sisterhood</a>
                <h2>VENERDÌ 12 APRILE
                    <span class="material-symbols-outlined">
                            arrow_forward
                    </span>
                    DALLE 19H30
                </h2>
                <p>
                Ultima proiezione nell'ambito del Lux Audience Prize sostenuto dal Parlamento Europeo! <br>
                <br>
                Nell'intimità delle saune sacre dell'Estonia si riuniscono tutti i rituali della vita. Nel fumo delle pietre ardenti, la condizione femminile appare in tutta la sua verità e forza eterna.
                </p>
                <div class = "more-info">
                    <a>PIU' INFORMAZIONI</a>
                    <span class="material-symbols-outlined">
                            arrow_forward
                    </span>
                </div>
            </div>
            <div class = "description green-background">
                <div class = "img-preview"></div>
                <h3>AGENDA</h3>
                <a class = "title">IL FESTIVAL ARSMONDO AL COSMOS</a>
                <h2>13.04
                    <span class="material-symbols-outlined">
                            arrow_forward
                    </span>
                    21.04
                </h2>
                <p>
                IN COLLABORAZIONE CON L'OPÉRA NATIONAL DU RHIN <br>
                <br>
                Nell'ambito del festival Arsmondo organizzato dall'Opéra national du Rhin, in programma dal 12 aprile al 7 maggio, il Cosmos è lieto di offrire ad adulti, ragazzi, famiglie e bambini una panoramica sull'utopia e sui paesi immaginari nel cinema. Il 13 e 14 aprile e il 20 e 21 aprile, potrete scoprire o rivisitare sul grande schermo mondi immaginari, specchi deformanti della nostra realtà, attraverso una selezione eclettica di 6 film, che spaziano dai capolavori della settima arte alla fantascienza, all'animazione e alla commedia.
                </p>
                <div class = "more-info">
                    <a>PIU' INFORMAZIONI</a>
                    <span class="material-symbols-outlined">
                            arrow_forward
                    </span>
                </div>
            </div>
        </div>
        </main>
        <footer>
            <div class = "top-bar-footer">
                <a id = "frequent-questions">Domande frequenti</a>
                <a href = "#" id = "newsletter">Newsletter</a>
                <a href = "mailto:agora@cinema-cosmos.eu" id = "contacts">Contatti</a>
            </div>
            <div class = "bottom-bar-footer">
                <img src="./img/logo-small.svg" alt="">
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
                            <img src="./img/icon-facebook.svg" alt="">
                        </a>
                        <a href="https://www.instagram.com/cinemalecosmos/" target="_blank">
                            <img src="./img/icon-instagram.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class = "logos">
                    <img src="./img/DRAC.svg" alt="">
                    <img src="./img/strasbourg.png" alt="">
                </div>
            </div>
        </footer>
    </body>
</html>