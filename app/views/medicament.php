<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de medicaments</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h1>Liste de medicaments</h1>
        <a class="button" href="?page=insererMedoc">Ajouter</a>
        <?php if (!empty($data) && is_array($data)): ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Designation</th>
                        <th>Description</th>
                        <th>Prix</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $medicament): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($medicament['code_medicament']); ?></td>
                            <td><?php echo htmlspecialchars($medicament['designation']); ?></td>
                            <td><?php echo htmlspecialchars($medicament['description']); ?></td>
                            <td><?php echo htmlspecialchars($medicament['prix']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Aucun medicament disponible.</p>
        <?php endif; ?>
    </main>
</body>
</html>

<!-- CODE MODIFIE PAR FIDELE NGASHANI -->