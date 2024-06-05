
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="lecosmos.css">
        <script src="./lecosmos.js" defer = "true"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Manrope:wght@200..800&family=Ramabhadra&family=Spline+Sans+Mono:ital,wght@0,300..700;1,300..700&family=Yantramanav:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,0" />
    </head>
    <body>
        <nav>
            <a href = "../index.php" id = "home-nav">Home</a>
            <a id = "lecosmos-nav">Le Cosmos</a>
            <a href = "../agenda/agenda.php" id = "agenda-nav">Agenda</a>
            <div class = "spacer"></div>
            <?php

                // Avvia la sessione
                session_start();
                // Verifica se l'utente è loggato
                if(!isset($_SESSION['username'])) echo '<a href = "../login/login.php" id = "login"> Accedi </a>';
                    else echo ' <a id = "login_t"> Ciao, '.$_SESSION['username'].' </a>
                                <div class = "dropdown">
                                    <a>MyCosmos</a>
                                    <a href = "../php_main/logout.php">Logout</a>
                                </div>
                                ';

            ?>
        </nav>
        <header>
            <a href = "#project" id = "project-nav">Il progetto</a>
            <a href = "#governance" id = "governance-nav">La governance</a>
        </header>
        <main>
            <div id = "project" ></div>
            <h1>IL PROGETTO</h1>
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
            <div class = "description">
                <div>
                    <p>
                    Il cinema municipale di Strasburgo si rifà il look, ha un nuovo nome e un nuovo progetto! Dopo un periodo di ristrutturazione, Le Cosmos aprirà prima dell'estate 2023, così come il suo bar-ristorante: Le Bardu.
                    </p>
                    <p>
                    Il cinema municipale di Strasburgo si rifà il look, ha un nuovo nome e un nuovo progetto! Dopo un periodo di ristrutturazione, Le Cosmos aprirà prima dell'estate 2023, così come il suo bar-ristorante: Le Bardu.
                    </p>
                    <ul>
                        <li>
                            Un <span class = "highlight">approccio cooperativo</span> che coinvolge il pubblico, i partner e i dipendenti.
                        </li>
                        <li>
                            <span class = "highlight">Cicli tematici</span> incentrati sull'arte e le tecniche del cinema, ma anche su questioni sociali.
                        </li>
                        <li>
                            <span class = "highlight">Eventi culturali</span> co-costruiti con organizzazioni locali e collegati al programma cinematografico (mostre, concerti, spettacoli, ecc.).
                        </li>
                    </ul>
                    <p>
                        Oltre alla serie di film, il Cosmos offre anche una serie di eventi speciali, tra cui proiezioni “carta bianca”, eventi dedicati all'industria audiovisiva locale ed eventi di attualità. Il Cosmos presta grande attenzione all'educazione all'immagine, ospitando o organizzando eventi e laboratori al di fuori delle sue mura: proiezioni all'aperto, film-making, incontri e masterclass con registi e professionisti del cinema, serate speciali, ecc.
                    </p>
                    <p>
                        Più che un luogo per vedere film, un luogo da vivere...
                    </p>
                    <p>
                        Questo progetto di cinema aperto alla città è stato concepito e coltivato per più di due anni da un collettivo formato intorno all'associazione Le Troisième Souffle prima di essere presentato alla Città di Strasburgo, che lo ha scelto nell'aprile del 2022.
                    </p>
                </div>
                <div>
                    <img src="../img/loto-cine.png" alt="">
                </div>
            </div>
            <div id = "governance" ></div>
            <h1>LA GOVERNANCE</h1>
            <div class = "description">
                <div>
                    <p>
                        Cosa si può fare per far sì che il cinema municipale riacquisti il suo posto nel cuore della città e coinvolga i cittadini di Strasburgo? Questa è stata la domanda chiave per il gruppo che ha ideato il progetto, e ha ispirato il desiderio di creare uno statuto che permettesse a tutti di essere coinvolti e una forma di governance più orizzontale e cooperativa.
                    </p>
                    <p>
                        In un momento in cui diventa urgente rivedere i nostri processi democratici, includere i cittadini, cambiare i nostri modelli economici e ripensare il nostro rapporto con il lavoro, la cooperativa è sembrata la scelta più ovvia. Questa forma di organizzazione, che incarna valori più umani e inclusivi, fa parte dell'economia sociale.
                    </p>
                    <img src="../img/cosmos-2320.jpeg" alt="">
                    <p>
                    Le Troisième Souffle ha scelto di strutturarsi come Société coopérative d'intérêt collectif (SCIC), il cui scopo è produrre o fornire beni e servizi di interesse collettivo e di utilità sociale. Si tratta di una società privata di interesse pubblico che riunisce persone fisiche e/o giuridiche per lavorare a un progetto comune.
                    </p>
                    <p>
                    Insieme ad altri membri del pubblico, fornitori, volontari, autorità locali, associazioni, partner, ecc. i dipendenti decidono la direzione strategica della cooperativa, i principali investimenti e la distribuzione degli utili. Ogni socio ha lo stesso diritto di voto nelle assemblee generali della SCIC, indipendentemente dal capitale posseduto.
                    </p>
                </div>
                <div>
                    <p>
                        Dal punto di vista giuridico, una SCIC è una società cooperativa sotto forma di SA, SARL o SAS. Le Troisième Souffle, sostenuta dall'URSCOP Grand Est, ha scelto la forma SAS, che consente un numero illimitato di soci e uno statuto più flessibile.
                    </p>
                    <p>
                        <span class = "highlight">I vari organi dello SCIC SAS Le Troisième Souffle :</span>
                    </p>
                    <h3>
                        <span class = "material-symbols-outlined"> arrow_forward</span>  I collegi della SCIC SAS Le Troisième Souffle
                    </h3>
                    <p>
                        La cooperativa Troisième Souffle è composta da sei collegi: i dipendenti, i soci che hanno avviato il progetto, gli utenti, il bar, i partner (partner culturali, strutture (mediche e) sociali, centri socio-culturali + settore audiovisivo) e, infine, i sostenitori (enti locali, aziende private). Ogni collegio ha una percentuale di voto nelle assemblee generali. Tutti i membri del collegio hanno diritto a partecipare alle assemblee generali.
                    </p>
                    <h3>
                        <span class = "material-symbols-outlined"> arrow_forward</span>   Il Consiglio della Cooperativa
                    </h3>
                    <p>
                        È composto da membri eletti e volontari dei vari collegi e agisce come un Consiglio di Amministrazione. I suoi membri si riuniscono quattro volte l'anno, stabiliscono e approvano le principali direttive per la sede e ne controllano l'attuazione.
                    </p>
                    <h3>
                        <span class = "material-symbols-outlined"> arrow_forward</span>   Il Consiglio di programmazione
                    </h3>
                    <p>
                        È composto da 10 membri provenienti dai 6 collegi che restano in carica per tre anni (rinnovabili per terzi). Questi membri sono selezionati dal Consiglio di Cooperazione per la loro conoscenza del cinema. In questo modo, il Consiglio di Cooperazione assicura una rappresentanza equilibrata delle diverse sensibilità cinematografiche e che tutti i formati siano rappresentati (cortometraggi, nuovi media, lungometraggi, documentari, pubblico giovane, ecc.) Il Consiglio di programmazione è integrato da personalità ospiti a seconda dei temi dei cicli. <br>
                        I membri di questo comitato guardano i film, suggeriscono e difendono le loro proposte e conoscono i requisiti, le regole e i vincoli della programmazione cinematografica. È probabile che scrivano, presentino film in pubblico, ecc.
                    </p>
                </div>
            </div>
        </main>
        <br><br><br><br><br>
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