<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Patient</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Ajouter un Patient</h1>
        <nav class="mb-4">
            <a href="?page=listePatient" class="btn btn-secondary">Liste Patients</a>
            <a href="?page=liste" class="btn btn-secondary ml-2">Liste Médicaments</a>
            <a href="?page=home" class="btn btn-info ml-2">Accueil</a>
        </nav>
        <form action="?page=insertPatient" method="POST" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="postnom">Postnom</label>
                <input type="text" class="form-control" id="postnom" name="postnom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="date_naissance">Date de Naissance</label>
                <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <textarea class="form-control" id="adresse" name="adresse" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input type="text" class="form-control" id="telephone" name="telephone" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>