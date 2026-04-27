<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Patient</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 500px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        textarea {
            resize: vertical;
            min-height: 80px;
        }
        .form-actions {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        button {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            font-size: 14px;
        }
        .btn-submit {
            background-color: #2196F3;
            color: white;
        }
        .btn-submit:hover {
            background-color: #0b7dda;
        }
        .btn-cancel {
            background-color: #ccc;
            color: #333;
        }
        .btn-cancel:hover {
            background-color: #bbb;
        }
        a {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>✏️ Modifier le Patient</h1>
        <form action="?page=modifierPatient" method="POST">
            <input type="hidden" name="id" value="<?= $data['code_patient'] ?>">
            
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" value="<?= $data['nom'] ?>" required>
            </div>
            <div class="form-group">
                <label for="postnom">Postnom :</label>
                <input type="text" id="postnom" name="postnom" value="<?= $data['postnom'] ?>" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" value="<?= $data['prenom'] ?>" required>
            </div>
            <div class="form-group">
                <label for="date_naissance">Date de naissance :</label>
                <input type="datetime-local" id="date_naissance" name="date_naissance" value="<?= $data['date_naissance'] ?>" required>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse :</label>
                <textarea id="adresse" name="adresse" required><?= $data['adresse'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone :</label>
                <input type="tel" id="telephone" name="telephone" value="<?= $data['telephone'] ?>" required>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn-submit">✅ Modifier</button>
                <a href="?page=listePatients"><button type="button" class="btn-cancel">❌ Annuler</button></a>
            </div>
        </form>
    </div>
</body>
</html>
