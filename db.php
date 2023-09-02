<?php
$servername = "eu-cdbr-west-03.cleardb.net"; // L'adresse du serveur MySQL (généralement "localhost" en local)
$username = "b34181135d40b9"; // Le nom d'utilisateur par défaut pour XAMPP est souvent "root"
$password = "7144fce0"; // Laissez le mot de passe vide par défaut
$database = "heroku_0dd7602d0b2c762"; // Remplacez par le nom de votre base de données

// Créer une connexion
$conn = mysqli_connect($servername, $username, $password, $database);

// Vérifier la connexion
if (!$conn) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}
?>
