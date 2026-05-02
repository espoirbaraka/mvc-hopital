<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Médicaments</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Liste des Médicaments</h1>
        <nav class="mb-4">
            <a href="?page=insererMedoc" class="btn btn-primary">Ajouter Médicament</a>
            <a href="?page=listePatient" class="btn btn-secondary ml-2">Liste Patients</a>
            <a href="?page=home" class="btn btn-info ml-2">Accueil</a>
        </nav>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Désignation</th>
                    <th>Description</th>
                    <th>Prix</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $medoc): ?>
                <tr>
                    <td><?php echo htmlspecialchars($medoc['code_medicament']); ?></td>
                    <td><?php echo htmlspecialchars($medoc['designation']); ?></td>
                    <td><?php echo htmlspecialchars($medoc['description']); ?></td>
                    <td><?php echo htmlspecialchars($medoc['prix']); ?> FC</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>