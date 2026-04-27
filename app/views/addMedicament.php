<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserez un medicament</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h1>Inserez un medicament</h1>
        <a class="button" href="?page=liste">Liste</a>
        <form action="?page=insert" method="POST">
            <div class="form-group">
                <label for="designation">Designation</label>
                <input type="text" id="designation" name="designation" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" id="description" name="description" required>
            </div>
            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="number" id="prix" name="prix" step="0.01" required>
            </div>
            <input type="submit" name="valider" value="Inserer">
        </form>
    </main>
</body>
</html>