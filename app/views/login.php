<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    
    <?php if(isset($data['error'])): ?>
        <p style="color: red;"><?php echo $data['error']; ?></p>
    <?php endif; ?>

    <form method="POST" action="?page=login">
        <label for="username">Nom d'utilisateur:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Mot de passe:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Se connecter</button>
    </form>

    <p>Pas encore de compte? <a href="?page=register">Créer un compte</a></p>
</body>
</html>
