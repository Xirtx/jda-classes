<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Jeanne</title>
    <!-- Ajout des liens CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Remplissez le formulaire pour connaître vos classes à JDA</h1>
        <form action="traitement.php" method="post">    
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>

            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>

            <div class="form-group">
                <label for="niveau">Niveau :</label>
                <select class="form-control" id="niveau" name="niveau">
                    <option value="terminale">Terminale</option>
                    <option value="premiere">Première</option>
                    <option value="seconde">Seconde</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="number">Numéro :</label>
                <input type="number" class="form-control" id="number" name="number" min="1" max="14" value="1" required>
            </div>

            <button type="submit" class="btn btn-primary">Envoyer et voir les classes</button>
            
        </form>
        <br>
        <br>
        <!-- Bouton pour passer à la page suivante -->
        <div class="text-left mt-3">
            <a href="classes.php" class="btn btn-success">J'ai déjà renseigné mes informations, voir les classes directement</a>
        </div>
    </div>

    <!-- Ajout du script JavaScript de Bootstrap (facultatif) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
