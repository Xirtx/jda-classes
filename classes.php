<?php
// Inclure la connexion depuis le fichier connexion.php
require_once('db.php');

// Créer un tableau avec les classes (1, 2, T) et les numéros (1, 2, 3, ...)
$classes = ['T', '1', '2'];
$numeros = range(1, 14); // Crée un tableau avec les numéros de 1 à 12

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
        <h1 class="text-center">Classes à JDA : année 2023</h1>
        <br>
        <br>
        <div class="text-center">
            <h3>Aller à :</h3>
            <a href="#seconde" class="btn btn-primary" style='scroll-behavior: smooth;'>Seconde</a>
            <a href="#premiere" class="btn btn-primary" style='scroll-behavior: smooth;'>Première</a>
            <a href="#terminale" class="btn btn-primary" style='scroll-behavior: smooth;'>Terminale</a>
            <br>
            <br>
        </div>
        <?php
        // Boucle sur les classes
        foreach ($classes as $classe) {
            if($classe=='2'){echo "<strong><h2 id='seconde'>Classe : Seconde</h2></strong>";}
            echo "<br>";
            if($classe=='1'){echo "<strong><h2 id='premiere'>Classe : Première</h2></strong>";}
            echo "<br>";
            if($classe=='T'){echo "<strong><h2 id='terminale'>Classe : Terminale</h2></strong>";}
            foreach ($numeros as $numero) {
                $sql = "SELECT nom, prenom FROM jda WHERE classe = '$classe-$numero'";
                $result = mysqli_query($conn, $sql);
                if($classe=='2'){echo "<h5 >2de $numero</h5>";}
                if($classe=='1'){echo "<h5 >1er $numero</h5>";}
                if($classe=='T'){echo "<h5 >Tle $numero</h5>";}
                echo "<table class='table table-bordered custom-table'>";
                echo "<thead><tr><th>Nom</th><th>Prénom</th></tr></thead>";
                echo "<tbody>";
                
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['nom'] . "</td>";
                    echo "<td>" . $row['prenom'] . "</td>";
                    echo "</tr>";
                }

                echo "</tbody>";
                echo "</table>";
            }
        }
        ?>
    </div>

    <footer class="text-center mt-5">
        <p><em>Créé par Trix et Roulio</em></p>
    </footer>
    
    <!-- Ajout du script JavaScript de Bootstrap (facultatif) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

