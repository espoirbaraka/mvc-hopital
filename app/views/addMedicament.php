<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/mvc-hopital/public/assets/css/style.css">
    <a href="?page=home" class="btn-home">🏠 Accueil</a>
    <nav>
    <a href="?page=home">Accueil</a>
    <a href="?page=liste">Médicaments</a>
    <a href="?page=listePatient">Patients</a>
</nav>
</head>
<body>
    <h1>Inserez un medicament</h1>
    <a href="?page=liste">Liste</a>
    <form action="?page=insert" method="POST">
        <div>
            <label for="">Designation</label>
            <input type="text" name="designation">
        </div>
        <div>
            <label for="">Description</label>
            <input type="text" name="description">
        </div>
        <div>
            <label for="">Prix</label>
            <input type="number" name="prix">
        </div>
        <input type="submit" name="valider" value="Inserer">
    </form>
</body>
</html>