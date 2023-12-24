<?php
//On démarre une nouvelle session
session_start();

if (!isset($_SESSION["language"])) {
    $_SESSION["language"] = "fr";
} else if (isset($_GET["language"])) {
    $_SESSION["language"] = $_GET["language"];
}
$language = $_SESSION["language"];
?>
<!DOCTYPE html>
<html class="all-border">
    <head>
        <title>Cédric Mariya Constantine | Étudiant en Informatique</title>
        <meta charset="UTF-8">
        <meta name="Author" content="Mariya Constantine Cédric">
        <meta name="Made" content="mariyaconsta02@edu.univ-eiffel.fr">
        <meta name="description"
            content="Étudiant en BUT informatique à l'IUT Marne la Vallée. Voici mon Portfolio pour mieux me connaître." />
        <meta name="keywords" content="portfolio, développement web, but, informatique, Cédric Mariya Constantine">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Responsive -->
        <meta name="robots" content="index,follow">
        <!-- <meta http-equiv="Refresh" content="30"> -->

        <link rel="shortcut icon" href="../img/favicon.png"> <!-- Favicon -->

        <!-- Fichiers CSS -->
        <link rel="stylesheet" href="style/page_principale.css">
        <link rel="stylesheet" href="style/fonts.css">
        <style>
            html, main {
                height: auto;
                margin: 50px;
                padding: 50px;
                background-color: #3f3f3f;
            }

            header {
                width: 100%;
                text-align: center;
            }

            h1 {
                text-align: center;
                margin-top: 8%;
                font-size: 3rem;
                color: white;
                font-family: "Dyno-Regular";
            }

            main, a:active, a:visited, a:link, a:hover {
                font-family: "Cicle-Semi";
                color: white;
            }
        </style>
    </head>


    <body>

        <header>
            <?php
            if ($_SESSION["language"] == "eng") {
                echo "<h1>Legal notice</h1>";
            } else {
                echo "<h1>Mentions légales</h1>";
            }
            ?>
        </header>

        <main>
            <p>
                <?php
                if ($_SESSION["language"] == "eng") {
                    echo "Website of Toledo, a city of UNESCO World Heritage Forum.";
                    echo "<br>";
                    echo "Email : <a href='mailto: toledo-sae@googlegroups.com'>toledo-sae@googlegroups.com</a>";
                    echo "<br>";
                    echo "Non-original image sources : <a href='https://icons8.com/icons'>ICONS</a> and <a href='https://www.flaticon.com/'>FLATICON</a>.";
                    echo "<br>";
                    echo "Hosting : Gustave Eiffel University.";
                    echo "<br>";
                    echo "Social situation : Students.";
                    echo "<br>";
                    echo "Study address : 2 Rue Albert Einstein, 77420 Champs-sur-Marne";
                    echo "<br>";
                    echo "Phone : 01 60 95 85 85";
                    echo "<br>";
                    echo "Computer Science Department : 01 60 95 85 11";
                    echo "<br>";
                    echo "Legal information : <a href='https://www.univ-eiffel.fr/mentions-legales/'>Legal notice</a>";
                    echo "<br>";
                    echo "Additional information :";
                    echo "<ul>";
                    echo "<li>No use of cookies</li>";
                    echo "<li>No use of personal data</li>";
                    echo "<li>No use of navigation data</li>";
                    echo "<li>No use of location data</li>";
                    echo "<li>No use of connection data</li>";
                    echo "<li>No use of health data</li>";
                    echo "</ul>";
                    echo "<p>® - <a href='index.php'>Back to the Home page</a></p>";
                } else {
                    echo "Siteweb de Tolède, ville du patrimoine mondial du forum UNESCO.";
                    echo "<br>";
                    echo "Email : <a href='mailto: toledo-sae@googlegroups.com'>toledo-sae@googlegroups.com</a>";
                    echo "<br>";
                    echo "Sources d'images non originale : <a href='https://icons8.com/icons'>ICONS</a> et <a href='https://www.flaticon.com/'>FLATICON</a>.";
                    echo "<br>";
                    echo "Hébergement : Université Gustave Eiffel.";
                    echo "<br>";
                    echo "Situation social : Étudiants.";
                    echo "<br>";
                    echo "Adresse d'étude : 2 Rue Albert Einstein, 77420 Champs-sur-Marne";
                    echo "<br>";
                    echo "Téléphone : 01 60 95 85 85";
                    echo "<br>";
                    echo "Département Informatique : 01 60 95 85 11";
                    echo "<br>";
                    echo "Informations légales : <a href='https://www.univ-eiffel.fr/mentions-legales/'>Mentions légales</a>";
                    echo "<br>";
                    echo "Informations complémentaires :";
                    echo "<ul>";
                    echo "<li>Aucune utilisation de cookies</li>";
                    echo "<li>Aucune utilisation de données personnelles</li>";
                    echo "<li>Aucune utilisation de données de navigation</li>";
                    echo "<li>Aucune utilisation de données de localisation</li>";
                    echo "<li>Aucune utilisation de données de connexion</li>";
                    echo "<li>Aucune utilisation de données de santé</li>";
                    echo "</ul>";
                    echo "<p>® - <a href='index.php'>Retour à la page d'accueil</a></p>";
                }
                ?>
            </p>
        </main>
    </body>
</html>