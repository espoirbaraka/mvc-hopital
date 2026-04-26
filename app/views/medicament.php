<!DOCTYPE html>
<html>
<head>
    <title>Liste des médicaments</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Liste des médicaments</h1>
    <a href="?page=insererMedoc">Ajouter</a>

    <table>
        <tr>
            <th>Désignation</th>
            <th>Description</th>
            <th>Prix</th>
        </tr>
        <?php foreach($data as $m): ?>
        <tr>
            <td><?= htmlspecialchars($m['designation'] ?? '') ?></td>
            <td><?= htmlspecialchars($m['description'] ?? '') ?></td>
            <td><?= number_format($m['prix'] ?? 0, 2, ',', ' ') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>