<!DOCTYPE html>
<html>
<head>
    <title>Ajouter médicament</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        input, textarea { margin: 5px 0; padding: 5px; }
    </style>
</head>
<body>
    <h1>Ajouter un médicament</h1>
    <a href="?page=liste">Retour</a>

    <form action="?page=insert" method="POST">
        <div><input type="text" name="designation" placeholder="Désignation" required></div>
        <div><textarea name="description" placeholder="Description" rows="3"></textarea></div>
        <div><input type="number" name="prix" step="0.01" placeholder="Prix" required></div>
        <input type="submit" name="valider" value="Enregistrer">
    </form>
</body>
</html>