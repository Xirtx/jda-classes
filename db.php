<?php
$servername = "eu-cdbr-west-03.cleardb.net"; // L'adresse du serveur MySQL (généralement "localhost" en local)
$username = "be5f7d4ff522ca"; // Le nom d'utilisateur par défaut pour XAMPP est souvent "root"
$password = "7d0327f554127f2"; // Laissez le mot de passe vide par défaut
$database = "heroku_878af3535d076e4"; // Remplacez par le nom de votre base de données

// Créer une connexion
$conn = mysqli_connect($servername, $username, $password, $database);

// Vérifier la connexion
if (!$conn) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}
?>
