<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    
    <?php if(isset($data['error'])): ?>
        <p style="color: red;"><?php echo $data['error']; ?></p>
    <?php endif; ?>

    <form method="POST" action="?page=register">
        <label for="username">Nom d'utilisateur:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Mot de passe:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <label for="confirmPassword">Confirmer le mot de passe:</label><br>
        <input type="password" id="confirmPassword" name="confirmPassword" required><br><br>

        <button type="submit">S'inscrire</button>
    </form>

    <p>Déjà inscrit? <a href="?page=login">Se connecter</a></p>
</body>
</html>
