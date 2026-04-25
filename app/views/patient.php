<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des patients</title>
    <link rel="stylesheet" href="/mvc-hopital/public/assets/css/style.css">
    <a href="?page=home" class="btn-home">Accueil</a>
    <nav>
    <a href="?page=home">Accueil</a>
    <a href="?page=liste">Médicaments</a>
    <a href="?page=listePatient">Patients</a>
</nav>
</head>
<body>

    <h1>Liste des patients</h1>

    <a href="?page=insererPatient">Ajouter un patient</a>

    <table>
        <tr>
            <th>Code</th>
            <th>Nom</th>
            <th>Postnom</th>
            <th>Prénom</th>
            <th>Date naissance</th>
            <th>Adresse</th>
            <th>Téléphone</th>
        </tr>

        <?php foreach($data as $patient): ?>
        <tr>
            <td><?= $patient['code_patient'] ?></td>
            <td><?= $patient['nom'] ?></td>
            <td><?= $patient['postnom'] ?></td>
            <td><?= $patient['prenom'] ?></td>
            <td><?= $patient['date_naissance'] ?></td>
            <td><?= $patient['adresse'] ?></td>
            <td><?= $patient['telephone'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tr>

</table>

</body>
</html>