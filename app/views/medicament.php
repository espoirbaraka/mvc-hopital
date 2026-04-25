<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste de medicaments</h1>
    <a href="?page=insererMedoc">Ajouter</a><br><br>

    <form action="?page=searchMedicament" method="post">
        <input type="text" name="keyword">
        <button type="submit">Chercher</button>
    </form><br>

    <?php
    var_dump($data);
    ?>
</body>
</html>