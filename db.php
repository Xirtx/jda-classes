<?php
$servername = "localhost"; // L'adresse du serveur MySQL (généralement "localhost" en local)
$username = "be5f7d4ff522ca"; // Le nom d'utilisateur par défaut pour XAMPP est souvent "root"
$password = "cd46a061"; // Laissez le mot de passe vide par défaut
$database = "jda"; // Remplacez par le nom de votre base de données

// Créer une connexion
$conn = mysqli_connect($servername, $username, $password, $database);

// Vérifier la connexion
if (!$conn) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}
?>
