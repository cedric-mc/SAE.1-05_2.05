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
<html>

<head>
    <title>
        <?php
        if ($_SESSION["language"] == "eng") {
            echo "Toledo - Home page";
        } else {
            echo "Tolède - Page d'accueil";
        }
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Loïc Mauritius, Amaury Booms, Mariya Constantine Cédric">
    <meta name="Owns" CONTENT="Booms Amaury, Mariya Constantine Cédric, Mauritius Loïc">
    <meta name="description"
        content="Projet de médiation culturelle et numérique, Tolède, ville du patrimoine mondial du forum UNESCO">
    <link href="style/index.css" rel="stylesheet">
    <link href="style/fonts.css" rel="stylesheet">
</head>

<body>
    <div class="filtre_fond"></div>
    <div class="langue">
        <?php
        if ($_SESSION["language"] == "eng") {
            echo "<a href='index.php?language=fr'><img src='img/fr.png' alt='English Flag' title='Changer la langue en Français'></a>";
        } else {
            echo "<a href='index.php?language=eng'><img src='img/eng.jpg' alt='Drapeau Français' title='Change the language to English'></a>";
        }
        ?>
    </div>

    <header>
        <?php
        if ($_SESSION["language"] == "eng") {
            echo "<h1>Toledo</h1>";
            echo "<h2>Website</h2>";
        } else {
            echo "<h1>Tolède</h1>";
            echo "<h2>Site Web</h2>";
        }
        ?>
    </header>

    <main>
        <ul>
            <a href="page_principale.php#Accueil">
                <?php
                if ($_SESSION["language"] == "eng") {
                    echo "Home";
                } else {
                    echo "Accueil";
                }
                ?>
            </a>
            <a href="page_principale.php#Histoire">
                <?php
                if ($_SESSION["language"] == "eng") {
                    echo "About the city";
                } else {
                    echo "À propos de la ville";
                }
                ?>
            </a>
            <a href="page_principale.php#Monuments">
                <?php
                if ($_SESSION["language"] == "eng") {
                    echo "Touristic places";
                } else {
                    echo "Sites Touristiques";
                }
                ?>
            </a>
            <a href="page_principale.php#Map">
                <?php
                if ($_SESSION["language"] == "eng") {
                    echo "Interractive Map";
                } else {
                    echo "Carte Interactive";
                }
                ?>
            </a>
            <a href="page_principale.php#Contact">Contact</a>
            <a href="https://twitter.com/GPTolede" class="twitter-link" target="_blank">
                <svg class="twitter-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,
                    9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,
                    2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,
                    0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,
                    0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,
                    41.013,13.905,42,12.429" />
                </svg>
            </a>
        </ul>
    </main>
    <div class="logos">
        <a href="https://www.univ-gustave-eiffel.fr/"><img src="img/logo_gustave_eiffel.png" alt="Gustave_Eiffel"></a>
        <img src="img/logo_MCN.JPG" alt="M.C.N.">
    </div>
</body>

</html>