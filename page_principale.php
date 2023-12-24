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
<html lang="fr">

<head>
    <title>
        <?php
        if ($_SESSION["language"] == "eng") {
            echo "Toledo - Website";
        } else {
            echo "Tolède - Site Web";
        }
        ?>
    </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Loïc Mauritius, Amaury Booms, Mariya Constantine Cédric">
    <meta name="Owns" CONTENT="Booms Amaury, Mariya Constantine Cédric, Mauritius Loïc">
    <meta name="description"
        content="Projet de médiation culturelle et numérique, Tolède, ville du patrimoine mondial du forum UNESCO">
    <link rel="stylesheet" href="style/page_principale.css">
    <link rel="stylesheet" type="text/css" href="style/fonts.css">
    <script src="script_page_principale.js" defer></script>
    <style>
        footer a, footer a:visited, footer p {
            color: white;
        }
    </style>
</head>

<body scroll="no">
    <header>
        <ul class="menu">
            <div class="toggle"></div>

            <li style="--i:1;--clr:#b94503;">
                <a href="#Accueil"> <img src="img/logo/accueil.png" alt="" title="Accueil"></a>
            </li>
            <li style="--i:2;--clr:#b94503;">
                <a href="#Histoire"> <img src="img/logo/logo_histoire_sf.png" alt="Histoire" title="Histoire"></a>
            </li>
            <li style="--i:3;--clr:#b94503;">
                <a href="#Monuments"> <img src="img/logo/logo_monuments_sf.png" alt="Monuments" title="Monuments"></a>
            </li>
            <li style="--i:4;--clr:#b94503;">
                <a id="map" href="#Map"> <img src="img/logo/fleche-map.png" alt="Map" title="Map"></a>
            </li>
            <li style="--i:5;--clr:#b94503;">
                <a href="#Contact"> <img src="img/logo/logo_contact_sf.png" alt="Contact" title="Contact"></a>
            </li>
        </ul>

        <div class="logos">
            <a href="https://www.univ-gustave-eiffel.fr/"><img src="img/logo_gustave_eiffel.png"
                    alt="Gustave_Eiffel"></a>
            <img src="img/logo/tolede_logo.png" alt="Toledo logo">
            <img src="img/logo_MCN.JPG" alt="logo_MCN">
        </div>

        <form class="connexion">
            <?php
            if ($_SESSION["language"] == "eng") {
                echo "<a href='page_principale.php?language=fr'><img src='img/fr.png' alt='English Flag' title='Changer la langue en Français'></a>";
            } else {
                echo "<a href='page_principale.php?language=eng'><img src='img/eng.jpg' alt='Drapeau Français' title='Change the language to English'></a>";
            }
            ?>
        </form>

    </header>

    <main>
        <div class="scroll-block">
            <div class="item" id="Accueil">
                <div id="presentation">
                    <a href="https://twitter.com/GPTolede"><img id="Twitter" src="img/Twitter.png"
                            alt="Twitter_account"></a>
                    <div id="titre">
                        <div>
                            <?php
                            if ($_SESSION["language"] == "eng") {
                                echo "<h1>Toledo</h1>";
                                echo "<h2>The city of the three cultures</h2>";
                            } else {
                                echo "<h1>Tolède</h1>";
                                echo "<h2>La ville aux trois cultures</h2>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div id="contenu_Accueil">
                    <?php
                    if ($_SESSION["language"] == "eng") {
                        echo "<h3>Introduction to the city :</h3>";
                        echo "<p>Toledo is a historic Spanish city that symbolizes the meeting of three monotheistic cultures (Jewish, Muslim and Christian). 
                        It was also the former capital of Spain (until 1561).<br> 
                        The city is located 70 km southwest of Madrid, on the banks of the Tagus River.<br>
                        This splendid city of magnificent landscapes and impressive monuments. It has become a major tourist center in Spain.<br>
                        Toledo is a city classified as a <strong>world heritage</strong> by <a href='#UNESCO'>UNESCO</a>.<br></p>";
                        echo "<h3 id='UNESCO'>What is UNESCO ?</h3>";
                        echo "<p>UNESCO is the United Nations Educational, Scientific and Cultural Organization, founded on November 16, 1945,
                         following the devastation of the Second World War.<br>
                        Its aim is to establish peace through international cooperation in education, science and culture.</p>";
                        echo "<h4>Let us introduce you to the characteristics of this world heritage !</h4>";
                        echo "<nav><a href='#Histoire'>History of the City</a></nav>";
                    } else {
                        echo "<h3>Présentation de la ville :</h3>";
                        echo "<p>Tolède est une ville historique d'Espagne qui symbolise la rencontre entre trois cultures monothéistes (juive, musulmane et chrétienne). 
                        Elle fût aussi l'ancienne capitale d'Espagne (jusqu'en 1561).<br> 
                        Cette ville est située à 70 km au sud-ouest de Madrid et est longée du fleuve Tage<br>
                        Cette splendide ville au cœur de paysages magnifiques comporte son lot de monuments impressionnants. Elle est aujourd'hui devenu un centre touristique important en Espagne<br>
                        Tolède est une ville classée <strong>patrimoine mondial</strong> par l'<a href='#UNESCO'>UNESCO</a>.<br></p>";
                        echo "<h3 id='UNESCO'>Qu'est ce que l'UNESCO ?</h3>";
                        echo "<p>L'UNESCO est une Organisation des Nations unies pour l'éducation, la science et la culture,
                        fondée le 16 novembre 1945 suite au dégâts de la seconde guerre mondiale.<br>
                        Son but est d'instaurer la paix par la coopération internationale en matière d'éducation, de
                        science et de culture.</p>";
                        echo "<h4>Laissez nous donc vous présenter les caractéristiques de ce patrimoine mondial !</h4>";
                        echo "<nav><a href='#Histoire'>L'Histoire de la Ville</a></nav>";
                    }
                    ?>
                </div>
            </div>

            <div class="item" id="Histoire">
                <div id="presentation">
                    <a href="https://twitter.com/GPTolede"><img id="Twitter" src="img/Twitter.png"
                            alt="Twitter_account"></a>
                    <div id="titre">
                        <div>
                            <?php
                            if ($_SESSION["language"] == "eng") {
                                echo "<h1>Toledo</h1>";
                                echo "<h2>The city of many changes</h2>";
                            } else {
                                echo "<h1>Tolède</h1>";
                                echo "<h2>La ville aux multiples changements</h2>";
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                    if ($_SESSION["language"] == "eng") {
                        echo "<address>Image by <a
                            href=\"https://pixabay.com/fr/users/jackmac34-483877/?utm_source=link-attribution&utm_medium=referral&utm_campaign=image&utm_content=1561698\">jacqueline
                            macou</a> from <a
                            href=\"https://pixabay.com/fr//?utm_source=link-attribution&utm_medium=referral&utm_campaign=image&utm_content=1561698\">Pixabay</a>
                            </address>";
                    } else {
                        echo "<address>Image par <a
                            href=\"https://pixabay.com/fr/users/jackmac34-483877/?utm_source=link-attribution&utm_medium=referral&utm_campaign=image&utm_content=1561698\">jacqueline
                            macou</a> de <a
                            href=\"https://pixabay.com/fr//?utm_source=link-attribution&utm_medium=referral&utm_campaign=image&utm_content=1561698\">Pixabay</a>
                            </address>";
                    }
                    ?>
                </div>
                <div id="contenu_Histoire">
                    <?php
                    if ($_SESSION["language"] == "eng") {
                        echo "<h3>History of the city :</h3>";
                        echo "<img class='Titre' src=\"img/important/fresque.png\" alt='History of the city'>";
                        echo "<div id='histoire'>";
                        echo "<h2>Founding - 200 B.C.</h2>";
                        echo "<p>Toledo was founded around 200 BC. 
                            It was founded by the Romans. During the Great Invasions of the 5th century, the city was repeatedly plundered by barbarians as the Roman Empire declined, 
                            and from the 6th century onwards, the city became the capital of what became the Visigothic kingdom of Spain.</p>";
                        echo "<h2>9th century A.D.</h2>";
                        echo "<p>In the early 8th century, Toledo fell to the Muslims led by the Berber conqueror Tariq ibn Ziyad following the Battle of Guadalete. 
                            It wasn't until 1085, in the midst of the Reconquista, that Christians led by King Alfonso VI recaptured the city from the Muslims.</p>";
                        echo "<h2>12th century A.D.</h2>";
                        echo "<p>During the 12th century, Toledo became a renowned translation center and a meeting place for scholars of the 3 great religions. 
                            As a result of this scholarly influence, between the 12th and 16th centuries, the city also became one of Castile's richest and most powerful capitals.</p>";
                        echo "<h2>16th century A.D.</h2>";
                        echo "<p>During the War of the Communities of Castile, Toledo was one of the first cities to rebel under the leadership of Pedro Laso de la Vega and Juan de Padilla. 
                            After the defeat of the Communes at the battle of Villalar, Padilla's widow, María Pacheco, put up real resistance until she surrendered her arms in 1522. 
                            It was here that Emperor Charles V established the seat of his court. 
                            In 1561, Toledo was abandoned in this role in favor of Madrid on the initiative of Philip II.</p>";
                        echo "<h2>20th century A.D.</h2>";
                        echo "<p>When the Spanish Civil War broke out, Toledo was located in a Republican zone. 
                            During the Spanish Civil War, Toledo was the scene of fighting around the Alcazar Military Academy. 
                            It was here that the famous siege of the Alcazar of Toledo took place (1936), where Nationalist troops withstood a siege of almost 70 days by Republican troops. 
                            They were rescued on September 28, 1936 by General Varela's troops, 
                            and after three months of intense fighting, Colonel Moscardó, commander of the place, uttered a famous word to the Nationalist troops who had come to rescue him : 
                            \"Sin novedad en el Alcázar\" (\"Nothing to report in the Alcazar\"), a phrase then conventional in the Spanish army.</p></div>";
                    } else {
                        echo "<h3>Histoire de la ville :</h3>";
                        echo "<img class='Titre' src=\"img/important/fresque.png\" alt='Histoire de la ville'>";
                        echo "<div id='histoire'>";
                        echo "<h2>Fondement - 200 avant J-C</h2>";
                        echo "<p>La ville de Tolède a été fondée aux alentours de 200 ans avant J-C.
                            Elle fut fondée par les romains. Lors des Grandes Invasions du Ve siècle,
                            la ville est pillée à plusieurs reprises par des barbares lors du déclin de l’empire romain
                            et à partir du VIe siècle,
                            la ville devient capitale de ce qui devient le royaume Wisigothique d’Espagne.</p>";
                        echo "<h2>IXème siècle après J-C</h2>";
                        echo "<p>Au début du VIIIe siècle, Tolède tombe aux mains des musulmans menés par le conquérant
                            berbère Tariq ibn Ziyad suite à la bataille de Guadalete.
                            Ce n’est qu’en 1085, en pleine Reconquista, que les chrétiens menés par le Roi Alphonse VI
                            reprennent la ville aux musulmans. </p>";
                        echo "<h2>XIIème siècle après J-C</h2>";
                        echo "<p>Au cours du XIIe siècle, Tolède devient un centre de traduction très réputé et un lieu de
                            rencontre entre les savants des 3 grandes religions.
                            De par ce rayonnement savant, entre les XIIe et le XVIe siècles,
                            la ville devient en plus l’une des plus riche et puissante capitale de Castille.</p>";
                        echo "<h2>XVIème siècle après J-C</h2>";
                        echo "<p>Lors de la guerre des Communautés de Castille, Tolède est une des premières villes à se
                            rebeller sous la houlette de Pedro Laso de la Vega et Juan de Padilla.
                            Après la défaite des communiers à la bataille de Villalar, María Pacheco, veuve de Padilla,
                            oppose une résistance réelle jusqu'à la remise des armes en 1522.
                            C’est là que l’empereur Charles V installe le siège de la Cour.
                            En 1561, Tolède est abandonnée dans ce rôle au profit de Madrid à l'initiative de Philippe
                            II.</p>";
                        echo "<h2>XXème siècle après J-C</h2>";
                        echo "<p>Lorsque la guerre civile se déclenche, Tolède est située dans une zone républicaine.
                            Pendant la guerre civile espagnole, Tolède est le théâtre de combats autour de l'Académie
                            militaire de l'Alcazar.
                            C'est là qu'eut lieu le siège de l'Alcazar de Tolède (1936) resté célèbre,
                            où des troupes nationalistes résistèrent à un siège de près de 70 jours mené par les troupes
                            républicaines.
                            Elles ont été secourues le 28 septembre 1936 par les troupes du général Varela,
                            et après trois mois d'intenses combats, le colonel Moscardó, commandant de la place,
                            prononça un mot resté célèbre aux troupes nationalistes venues le secourir :
                            « Sin novedad en el Alcazar » (« rien à signaler dans l'Alcazar »), phrase alors
                            conventionnelle dans l'armée espagnole.</p></div>";
                    }
                    ?>
                </div>

                <?php
                if ($_SESSION["language"] == "eng") {
                    echo "<nav>
                        <a href=\"#Accueil\">Back to Home</a>
                        <a href=\"#Monuments\">Tourist attractions</a>
                        </nav>";
                } else {
                    echo "<nav>
                        <a href=\"#Accueil\">Revenir à l'Accueil</a>
                        <a href=\"#Monuments\">Les sites touristique</a>
                        </nav>";
                }
                ?>
            </div>

            <div class="item" id="Monuments">
                <div id="presentation">
                    <a href="https://twitter.com/GPTolede"><img id="Twitter" src="img/Twitter.png"
                            alt="Twitter_account"></a>
                    <div id="titre">
                        <div>
                            <?php
                            if ($_SESSION["language"] == "eng") {
                                echo "<h1>Toledo</h1>";
                                echo "<h2>The city of historic monuments</h2>";
                            } else {
                                echo "<h1>Tolède</h1>";
                                echo "<h2>La ville aux monuments historique</h2>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div id="contenu_Monuments">
                    <?php
                    if ($_SESSION["language"] == "eng") {
                        echo "<h3>Historic monuments</h3>";
                    } else {
                        echo "<h3>Monuments historiques</h3>";
                    }
                    ?>
                    <table class="tableau_monuments">

                        <?php

                        include("connexion.inc.php");

                        $cnx->query('SET search_path TO UNESCO;');
                        $result = $cnx->query("SELECT * FROM monuments;");

                        while ($ligne = $result->fetch(PDO::FETCH_OBJ)) // un par un
                        {
                            echo "<tr>"; // on affiche les monuments à chaques lignes
                            echo "<td><div class='monument'><h1>".$ligne->nom."</h1><img src='$ligne->path' alt='$ligne->nom'></div></td>";
                            if ($_SESSION["language"] == "eng") {
                                echo "<td><p>$ligne->description_anglais</p></td>";
                            } else {
                                echo "<td><p>$ligne->description</p></td>";
                            }
                            echo "</tr>";
                        }

                        ?>
                    </table>
                </div>

                <nav>
                    <?php
                    if ($_SESSION["language"] == "eng") {
                        echo "<a href=\"#Accueil\">Back to Home</a>
                        <a href=\"#Histoire\">History of the City</a>
                        <a href=\"#Map\">Access to the Map</a>";
                    } else {
                        echo "<a href=\"#Accueil\">Revenir à l'Accueil</a>
                        <a href=\"#Histoire\">L'histoire de la ville</a>
                        <a href=\"#Map\">Accéder à la carte</a>";
                    }
                    ?>
                </nav>
            </div>

            <div class="item" id="Map">
                <div id="presentation">
                    <a href="https://twitter.com/GPTolede"><img id="Twitter" src="img/Twitter.png"
                            alt="Twitter_account"></a>
                    <div id="titre">
                        <div>
                            <?php
                            if ($_SESSION["language"] == "eng") {
                                echo "<h1>Toledo</h1>";
                                echo "<h2>The tourist city</h2>";
                            } else {
                                echo "<h1>Tolède</h1>";
                                echo "<h2>La ville touristique</h2>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div id="contenu_Map">
                    <?php
                    if ($_SESSION["language"] == "eng") {
                        echo "<h3>A beautiful city</h3>";
                    } else {
                        echo "<h3>Une ville magnifique</h3>";
                    }
                    ?>

                    <iframe
                        src="https://www.google.com/maps/d/u/0/embed?mid=13v5oNfB2j_zPb3EgcSAphTibpzwnS5Q&ehbc=2E312F"
                        width="80%" height="700px"></iframe>
                </div>

                <nav>
                    <?php
                    if ($_SESSION["language"] == "eng") {
                        echo "<a href=\"#Accueil\">Back to Home</a>
                        <a href=\"#Monuments\">Tourist attractions</a>
                        <a href=\"#Contact\">Contact us</a>";
                    } else {
                        echo "<a href=\"#Accueil\">Revenir à l'Accueil</a>
                        <a href=\"#Monuments\">Les sites touristique</a>
                        <a href=\"#Contact\">Nous contacter</a>";
                    }
                    ?>
                </nav>
            </div>

            <div class="item" id="Contact">
                <div id="presentation">
                    <a href="https://twitter.com/GPTolede"><img id="Twitter" src="img/Twitter.png"
                            alt="Twitter_account"></a>
                    <div id="titre">
                        <div>
                            <?php
                            if ($_SESSION["language"] == "eng") {
                                echo "<h1>Toledo Website</h1>";
                                echo "<h2>A cultural site created just for you</h2>";
                            } else {
                                echo "<h1>Site web de Tolède</h1>";
                                echo "<h2>Un site culturel créé pour vous</h2>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div id="contenu_Contact">
                    <?php
                    if ($_SESSION["language"] == "eng") {
                        echo "<h3>A small opinion to improve us?</h3>";
                    } else {
                        echo "<h3>Un petit avis pour nous ameliorer ?</h3>";
                    }
                    ?>

                    <form class="formulaire" method="post" action="contact.php">
                        <?php
                        if ($_SESSION["language"] == "eng") {
                            echo "<h2>Civil status:</h2>";
                            echo "<div id=\"info_civil\">
                            <div>
                                <label for=\"nom\">Name :</label>
                                <input type=\"text\" id=\"nom\" name=\"user_nom\">
                            </div>
                            <div>
                                <label for=\"prenom\">First name :</label>
                                <input type=\"text\" id=\"prenom\" name=\"user_prenom\">
                            </div>
                            <div>
                                <label for=\"email\">E-mail&nbsp; * :</label>
                                <input type=\"email\" id=\"mail\" name=\"user_mail\" required>
                            </div>
                            </div>";
                        } else {
                            echo "<h2>État civil:</h2>";
                            echo "<div id=\"info_civil\">
                            <div>
                                <label for=\"nom\">Nom :</label>
                                <input type=\"text\" id=\"nom\" name=\"user_nom\">
                            </div>
                            <div>
                                <label for=\"prenom\">Prénom :</label>
                                <input type=\"text\" id=\"prenom\" name=\"user_prenom\">
                            </div>
                            <div>
                                <label for=\"email\">E-mail&nbsp; * :</label>
                                <input type=\"email\" id=\"mail\" name=\"user_mail\" required>
                            </div>
                            </div>";
                        }
                        ?>
                        <?php
                        if ($_SESSION["language"] == "eng") {
                            echo "<h2>Various information:</h2>
                            <div id=\"info_diverses\">
                            <div>
                                <label for=\"themef\">What interested you on our site :</label>
                                <div id=\"favoris\">
                                    <div>
                                        <input type=\"checkbox\" id=\"histoire\" name=\"user_themef[]\" value=\"histoire\">
                                        <label for=\"histoire\">The history of the town</label>
                                    </div>
                                    <div>
                                        <input type=\"checkbox\" id=\"monuments\" name=\"user_themef[]\" value=\"monuments\">
                                        <label for=\"monuments\">The monuments</label>
                                    </div>
                                    <div>
                                        <input type=\"checkbox\" id=\"Carte_interractive\" name=\"user_themef[]\"
                                            value=\"Carte_interractive\">
                                        <label for=\"Carte_interractive\">Interactive map</label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for=\"msg\">Comment/suggestion *:</label>
                                <textarea id=\"msg\" name=\"user_message\"></textarea>
                            </div>
                            </div>";
                        } else {
                            echo "<h2>Informations diverses:</h2>
                            <div id=\"info_diverses\">
                            <div>
                                <label for=\"themef\">Ce qui vous a intéressé sur notre site :</label>
                                <div id=\"favoris\">
                                    <div>
                                        <input type=\"checkbox\" id=\"histoire\" name=\"user_themef[]\" value=\"histoire\">
                                        <label for=\"histoire\">L'histoire de la ville</label>
                                    </div>
                                    <div>
                                        <input type=\"checkbox\" id=\"monuments\" name=\"user_themef[]\" value=\"monuments\">
                                        <label for=\"monuments\">Les monuments</label>
                                    </div>
                                    <div>
                                        <input type=\"checkbox\" id=\"Carte_interractive\" name=\"user_themef[]\"
                                            value=\"Carte_interractive\">
                                        <label for=\"Carte_interractive\">La carte interactive</label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for=\"msg\">Commentaire/suggestion *:</label>
                                <textarea id=\"msg\" name=\"user_message\"></textarea>
                            </div>
                            </div>";
                        }
                        ?>
                        <div id="fin">
                            <?php
                            if ($_SESSION["language"] == "eng") {
                                echo "<div><input type=\"reset\" value=\"Clear\">
                                <input type=\"submit\" value=\"Send\"></div>";
                            } else {
                                echo "<div><input type=\"reset\" value=\"Effacer\">
                                <input type=\"submit\" value=\"Envoyer\"></div>";
                            }
                            ?>
                            <?php
                            if ($_SESSION["language"] == "eng") {
                                echo "<p>(*) Required field<br>
                                Your data will only be collected for statistical purposes and will in no case be the
                                subject of transactions or other.</p>";
                            } else {
                                echo "<p>(*) Champ obligatoire<br>
                                Vos données ne seront collectées qu'à des fins statistiques et ne feront en aucun cas
                                l'objet de transactions ou autres.</p>";
                            }
                            ?>
                        </div>
                    </form>
                </div>

                <div id="equipe">
                    <?php
                    if ($_SESSION["language"] == "eng") {
                        echo "<h3>Our team</h3>";
                    } else {
                        echo "<h3>Notre équipe</h3>";
                    }
                    ?>
                    <div class="presentation_equipe">
                        <div id="membre">
                            <div class="name-function">
                                <h1>Mauritius Loïc</h1>
                                <?php
                                if ($_SESSION["language"] == "eng") {
                                    echo "<h2>Development Manager</h2>";
                                    // echo "<p>Description</p>";
                                } else {
                                    echo "<h2>Responsable du développement</h2>";
                                    // echo "<p>Description</p>";
                                }
                                ?>
                            </div>
                            <img src="img/important/loic.jpg" alt="Mauritius Loïc">
                        </div>

                        <div id="membre">
                            <div class="info">
                                <h1>Booms Amaury</h1>
                                <?php
                                if ($_SESSION["language"] == "eng") {
                                    echo "<h2>Research Manager</h2>";
                                    // echo "<p>Description</p>";
                                } else {
                                    echo "<h2>Responsable de la recherche</h2>";
                                    // echo "<p>Description</p>";
                                }
                                ?>
                            </div>
                            <img src="img/important/Amaury.jpg" alt="Booms Amaury">
                        </div>

                        <div id="membre">
                            <div class="info">
                                <h1>Mariya Constantine Cédric</h1>
                                <?php
                                if ($_SESSION["language"] == "eng") {
                                    echo "<h2>Perfecting and Communication Manager</h2>";
                                    // echo "<p>Description</p>";
                                } else {
                                    echo "<h2>Responsable de la perfection et de la communication</h2>";
                                    // echo "<p>Description</p>";
                                }
                                ?>
                            </div>
                            <img src="img/important/Cedric.png" alt="Mariya-Constantine Cedric">
                        </div>
                    </div>
                </div>

                <nav>
                    <?php
                    if ($_SESSION["language"] == "eng") {
                        echo "<a href=\"#Map\">Access the Map</a>";
                        echo "<a href=\"#Accueil\">Back to Home</a>";
                    } else {
                        echo "<a href=\"#Map\">Accéder à la Carte</a>";
                        echo "<a href=\"#Accueil\">Revenir à l'Accueil</a>";
                    }
                    ?>
                </nav>

                <footer>
                    <?php
                    if ($_SESSION["language"] == "eng") {
                        echo "<p>© 2023 - <a href='index.php'>Toledo Website</a> - <a href='mentions-legales.php'>Legal Notice</a></p>";
                    } else {
                        echo "<p>© 2023 - <a href='index.php'>Site web de Tolède</a> - <a href='mentions-legales.php'>Mentions Légales</a></p>";
                    }
                    ?>
                </footer>
            </div>
        </div>

    </main>
</body>