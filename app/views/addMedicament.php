<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un medicament</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main class="container">
        <header class="header">
            <div>
                <p class="subtitle">Nouveau medicament</p>
                <h1>Formulaire d'ajout</h1>
            </div>
            <a href="?page=liste" class="btn btn-secondary">Retour a la liste</a>
        </header>

        <section class="card form-card">
            <form action="?page=insert" method="POST" class="form-grid">
                <div class="field">
                    <label for="designation">Designation</label>
                    <input id="designation" type="text" name="designation" required>
                </div>
                <div class="field">
                    <label for="description">Description</label>
                    <input id="description" type="text" name="description" required>
                </div>
                <div class="field">
                    <label for="prix">Prix</label>
                    <input id="prix" type="number" name="prix" min="0" required>
                </div>
                <div>
                    <button type="submit" name="valider" class="btn btn-primary">Inserer</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>