<?php

require_once('db.php');

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$niveau = $_POST["niveau"];
$number = $_POST["number"];

$dico = array(
    "seconde" => "2-",
    "premiere" => "1-",
    "terminale" => "T-",
);

$classe = $dico[$niveau] . $number;

$sql = "INSERT INTO jda (nom, prenom, classe) VALUES ('$nom', '$prenom', '$classe')";
$result = mysqli_query($conn, $sql);

header("Location: classes.php");
exit;

?>