<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Patients</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Liste des Patients</h1>
        <nav class="mb-4">
            <a href="?page=insererPatient" class="btn btn-primary">Ajouter Patient</a>
            <a href="?page=liste" class="btn btn-secondary ml-2">Liste Médicaments</a>
            <a href="?page=home" class="btn btn-info ml-2">Accueil</a>
        </nav>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Nom</th>
                    <th>Postnom</th>
                    <th>Prénom</th>
                    <th>Date de Naissance</th>
                    <th>Adresse</th>
                    <th>Téléphone</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $patient): ?>
                <tr>
                    <td><?php echo htmlspecialchars($patient['code_patient']); ?></td>
                    <td><?php echo htmlspecialchars($patient['nom']); ?></td>
                    <td><?php echo htmlspecialchars($patient['postnom']); ?></td>
                    <td><?php echo htmlspecialchars($patient['prenom']); ?></td>
                    <td><?php echo htmlspecialchars($patient['date_naissance']); ?></td>
                    <td><?php echo htmlspecialchars($patient['adresse']); ?></td>
                    <td><?php echo htmlspecialchars($patient['telephone']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>