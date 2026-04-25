<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Patient</title>
    <link rel="stylesheet" href="/mvc-hopital/public/assets/css/style.css">
    <a href="?page=home" class="btn-home">Accueil</a>
    <nav>
    <a href="?page=home">Accueil</a>
    <a href="?page=liste">Médicaments</a>
    <a href="?page=listePatient">Patients</a>
</nav>
</head>
<body>

    <h1>Insérer un patient</h1>

    <a href="?page=listePatient">Liste</a>

    <form action="?page=insertPatient" method="POST">

        <div>
            <label>Nom</label>
            <input type="text" name="nom">
        </div>

        <div>
            <label>Postnom</label>
            <input type="text" name="postnom">
        </div>

        <div>
            <label>Prénom</label>
            <input type="text" name="prenom">
        </div>

        <div>
            <label>Date de naissance</label>
            <input type="date" name="date_naissance">
        </div>

        <div>
            <label>Adresse</label>
            <input type="text" name="adresse">
        </div>

        <div>
            <label>Téléphone</label>
            <input type="text" name="telephone">
        </div>

        <input type="submit" name="valider" value="Insérer">

    </form>

</body>
</html>