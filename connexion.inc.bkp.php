<?php
$utilisateur =  "";
$motdepasse =  "";
$serveur =  "";
$bdd =  "";
$system =  "";
try {
    $cnx = new PDO("$system:host=$serveur;dbname=$bdd",$utilisateur,$motdepasse);
}
catch (PDOException $e) {
    echo "Erreur : $e<br>";
}
?>
