<?php
// Inclure la connexion depuis le fichier connexion.php
require_once('db.php');

// Créer un tableau avec les classes (1, 2, T) et les numéros (1, 2, 3, ...)
$classes = ['2', '1', 'T'];
$numeros = range(1, 14); // Crée un tableau avec les numéros de 1 à 12

// Afficher les résultats dans les tableaux correspondants
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats Jeanne</title>
    <br>
    <br>
    <!-- Ajout des liens CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Résultats du formulaire</h1>
        <div class="text-center">
            <h3>Aller à :</h3>
            <a href="#seconde" class="btn btn-primary" style='scroll-behavior: smooth;'>Seconde</a>
            <a href="#premiere" class="btn btn-primary" style='scroll-behavior: smooth;'>Première</a>
            <a href="#terminale" class="btn btn-primary" style='scroll-behavior: smooth;'>Terminale</a>
        </div>
        <?php
        // Boucle sur les classes
        foreach ($classes as $classe) {
            if($classe=='2'){echo "<h2 id='seconde'>Classe : Seconde</h2>";}
            if($classe=='1'){echo "<h2 id='premiere'>Classe : Première</h2>";}
            if($classe=='T'){echo "<h2 id='terminale'>Classe : Terminale</h2>";}
            foreach ($numeros as $numero) {
                $sql = "SELECT nom, prenom FROM jda WHERE classe = '$classe-$numero'";
                $result = mysqli_query($conn, $sql);
                if($classe=='2'){echo "<h5 >2de $numero</h5>";}
                if($classe=='1'){echo "<h5 >1er $numero</h5>";}
                if($classe=='T'){echo "<h5 >Tle $numero</h5>";}
                echo "<table class='table table-bordered'>";
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

        <!-- Bouton de retour à la page précédente -->
        <div class="text-center">
            <a href="home.html" class="btn btn-primary">Retour au formulaire</a>
        </div>
    </div>

    <!-- Ajout du script JavaScript de Bootstrap (facultatif) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
