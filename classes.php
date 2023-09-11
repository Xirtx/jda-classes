<?php
// Inclure la connexion depuis le fichier connexion.php
require_once('db.php');

// Créer un tableau avec les classes (1, 2, T) et les numéros (1, 2, 3, ...)
$classes = ['T', '1', '2'];
$numeros = range(1, 13); // Crée un tableau avec les numéros de 1 à 12

// Afficher les résultats dans les tableaux correspondants
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes JDA 2023</title>
    <br>
    <br>
    <!-- Ajout des liens CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
         <style>
        .custom-table {
            width: 100%;
        }

        .custom-table th,
        .custom-table td {
            text-align: center;
            width: 50%; /* Largeur fixe de 50% pour chaque cellule */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h3 class="text-center">Ce site est fermé.</h3>
    </div>
    
    <!-- Ajout du script JavaScript de Bootstrap (facultatif) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

