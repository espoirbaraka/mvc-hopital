<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/mvc-hopital/public/assets/css/style.css">
    <a href="?page=home" class="btn-home">Accueil</a>
    <nav>
    <a href="?page=home">Accueil</a>
    <a href="?page=liste">Médicaments</a>
    <a href="?page=listePatient">Patients</a>
</nav>
</head>
<body>
    <h1>Liste de medicaments</h1>
    <a href="?page=insererMedoc">Ajouter</a>
    
    <table>
        <tr>
            <th>Code</th>
            <th>Désignation</th>
            <th>Description</th>
            <th>Prix</th>
        </tr>

        <?php foreach($data as $med): ?>
        <tr>
            <td><?= $med['code_medicament'] ?></td>
            <td><?= $med['designation'] ?></td>
            <td><?= $med['description'] ?></td>
            <td><?= $med['prix'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>