<?php
    require_once __DIR__ . '/Movie.php';

    $movie = new Movie("Hunger Games", "2012", "Azione", "Gary Ross");
    $movie->setPlot("In un brutale futuro, 24 giovani vengono selezionati ogni anno per partecipare agli Hunger Games, una violenta competizione televisiva che prevede la sopravvivenza di uno solo.");
    $moviePlot = $movie->getPlot();

    $movie2 = new Movie("Interstellar", "2014", "Sci-fi", "Christopher Nolan");
    $movie2->setPlot("In un futuro non precisato, un drastico cambiamento climatico colpisce duramente l'agricoltura. Il granturco è l'unica coltivazione ancora in grado di crescere ed un gruppo di scienziati è intenzionato ad attraversare lo spazio per trovare nuovi luoghi adatti a coltivarlo.");
    $movie2Plot = $movie2->getPlot();

    $movie3 = new Movie("Kill Bill: Volume 1", "2003", "Azione/Giallo", "Quentin Tarantino");
    $movie3Plot = $movie3->getPlot();

    $movies = [];
    $movies[] = $movie;
    $movies[] = $movie2;
    $movies[] = $movie3;
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Movie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main-wrapper">
        <h1 class="heading">PHP Movies</h1>

        <?php
            foreach($movies as $movie) {
                echo    
                    "<div class='film'>
                        <ul> 
                            <li>
                                <h3>
                                    Titolo:
                                </h3>
                                <p class='film-title'>
                                    $movie->title
                                </p>
                            </li>
                            <li>
                                <h3>
                                    Anno:
                                </h3>
                                <p>
                                    $movie->year
                                </p>
                            </li>
                            <li>
                                <h3>
                                    Genere:
                                </h3>
                                <p>
                                    $movie->genre
                                </p>
                            </li>
                            <li>
                                <h3>
                                    Regista:
                                </h3>
                                <p>
                                    $movie->director
                                </p>
                            </li>
                            <li>
                                <h3>
                                    Trama:
                                </h3>
                                <p class='plot'>
                                    $movie->plot
                                </p>
                            </li>
                        </ul>
                    </div>";
            }
        ?>
        </div>
</body>
</html>