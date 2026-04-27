<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Médicaments</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f5f5f5; }
        .container { max-width: 900px; margin: 0 auto; background: white; padding: 20px; border-radius: 5px; }
        h1 { color: #333; }
        .btn-add { display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 3px; margin-bottom: 20px; }
        .btn-add:hover { background-color: #45a049; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #4CAF50; color: white; }
        tr:hover { background-color: #f5f5f5; }
        .no-data { text-align: center; padding: 20px; color: #666; }
        .alert { padding: 15px; margin-bottom: 20px; border-radius: 3px; }
        .alert-success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .alert-error { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Liste des Médicaments</h1>
        
        <?php if(isset($_SESSION['success'])): ?>
            <div class="alert alert-success"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></div>
        <?php endif; ?>
        
        <?php if(isset($_SESSION['error'])): ?>
            <div class="alert alert-error"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
        <?php endif; ?>
        
        <a href="?page=insererMedoc" class="btn-add">+ Ajouter un médicament</a>
        
        <?php if(!empty($data['medocs'])): ?>
            <table>
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Désignation</th>
                        <th>Description</th>
                        <th>Prix</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['medocs'] as $medoc): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($medoc['code']); ?></td>
                            <td><?php echo htmlspecialchars($medoc['designation']); ?></td>
                            <td><?php echo htmlspecialchars($medoc['description']); ?></td>
                            <td><?php echo number_format($medoc['prix'], 2); ?> €</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="no-data">Aucun médicament trouvé.</div>
        <?php endif; ?>
    </div>
</body>
</html>