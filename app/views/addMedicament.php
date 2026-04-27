<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Médicament</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f5f5f5; }
        .container { max-width: 500px; margin: 0 auto; background: white; padding: 30px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        h1 { color: #333; margin-bottom: 30px; }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 5px; color: #333; font-weight: bold; }
        input[type="text"], input[type="number"], textarea { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 3px; box-sizing: border-box; font-family: Arial, sans-serif; }
        input[type="text"]:focus, input[type="number"]:focus, textarea:focus { outline: none; border-color: #4CAF50; box-shadow: 0 0 5px rgba(76, 175, 80, 0.3); }
        textarea { resize: vertical; min-height: 100px; }
        .form-actions { display: flex; gap: 10px; margin-top: 30px; }
        .btn { padding: 12px 20px; border: none; border-radius: 3px; cursor: pointer; font-weight: bold; }
        .btn-submit { background-color: #4CAF50; color: white; }
        .btn-submit:hover { background-color: #45a049; }
        .btn-cancel { background-color: #ddd; color: #333; text-decoration: none; display: inline-block; }
        .btn-cancel:hover { background-color: #ccc; }
        .alert { padding: 15px; margin-bottom: 20px; border-radius: 3px; }
        .alert-error { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ajouter un Médicament</h1>
        
        <?php if(isset($_SESSION['error'])): ?>
            <div class="alert alert-error"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
        <?php endif; ?>
        
        <form action="?page=insert" method="POST">
            <div class="form-group">
                <label for="designation">Désignation *</label>
                <input type="text" id="designation" name="designation" required placeholder="Nom du médicament">
            </div>
            
            <div class="form-group">
                <label for="description">Description *</label>
                <textarea id="description" name="description" required placeholder="Description du médicament"></textarea>
            </div>
            
            <div class="form-group">
                <label for="prix">Prix (€) *</label>
                <input type="number" id="prix" name="prix" required placeholder="0.00" step="0.01" min="0">
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn btn-submit">Ajouter</button>
                <a href="?page=liste" class="btn btn-cancel">Annuler</a>
            </div>
        </form>
    </div>
</body>
</html>