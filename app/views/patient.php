<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Patients</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        h1 {
            color: #333;
        }
        .btn-add {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
            display: inline-block;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        th {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            text-align: left;
        }
        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .btn-edit {
            background-color: #2196F3;
            color: white;
            padding: 6px 12px;
            text-decoration: none;
            border-radius: 3px;
            margin-right: 5px;
        }
        .btn-delete {
            background-color: #f44336;
            color: white;
            padding: 6px 12px;
            text-decoration: none;
            border-radius: 3px;
        }
        .actions {
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <h1>📋 Liste des Patients</h1>
    <a href="?page=insererPatient" class="btn-add">➕ Ajouter un Patient</a>
    
    <?php if(empty($data)): ?>
        <p>Aucun patient enregistré</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Nom</th>
                    <th>Postnom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>Adresse</th>
                    <th>Téléphone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $patient): ?>
                    <tr>
                        <td><?= $patient['code_patient'] ?></td>
                        <td><?= $patient['nom'] ?></td>
                        <td><?= $patient['postnom'] ?></td>
                        <td><?= $patient['prenom'] ?></td>
                        <td><?= $patient['date_naissance'] ?></td>
                        <td><?= $patient['adresse'] ?></td>
                        <td><?= $patient['telephone'] ?></td>
                        <td class="actions">
                            <a href="?page=modifierPatient&id=<?= $patient['code_patient'] ?>" class="btn-edit">✏️ Modifier</a>
                            <a href="?page=supprimerPatient&id=<?= $patient['code_patient'] ?>" class="btn-delete" onclick="return confirm('Êtes-vous sûr?')">🗑️ Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>
