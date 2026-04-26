<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicaments</title>
</head>
<body>
    <h1>Liste de medicaments</h1>
    
    <?php if(isset($_SESSION['username'])): ?>
        <p>Bienvenue, <?php echo $_SESSION['username']; ?> | <a href="?page=logout">Déconnexion</a></p>
    <?php endif; ?>

    <a href="?page=insererMedoc">Ajouter</a>

    <h2>Statistiques</h2>
    <?php 
        if(!empty($data)):
            $total_prix = 0;
            $nombre_medocs = count($data);
            $prix_max = 0;

            foreach($data as $medoc):
                $total_prix += $medoc['prix'];
                if($medoc['prix'] > $prix_max):
                    $prix_max = $medoc['prix'];
                endif;
            endforeach;

            $prix_moyen = $nombre_medocs > 0 ? $total_prix / $nombre_medocs : 0;
    ?>
        <p>Nombre de médicaments: <strong><?php echo $nombre_medocs; ?></strong></p>
        <p>Total des prix: <strong><?php echo number_format($total_prix, 2); ?></strong></p>
        <p>Prix moyen: <strong><?php echo number_format($prix_moyen, 2); ?></strong></p>
        <p>Prix maximal: <strong><?php echo number_format($prix_max, 2); ?></strong></p>

        <h2>Médicaments</h2>
        <table border="1">
            <tr>
                <th>Code</th>
                <th>Designation</th>
                <th>Description</th>
                <th>Prix</th>
            </tr>
            <?php foreach($data as $medoc): ?>
                <tr>
                    <td><?php echo $medoc['code_medicament']; ?></td>
                    <td><?php echo $medoc['designation']; ?></td>
                    <td><?php echo $medoc['description']; ?></td>
                    <td><?php echo number_format($medoc['prix'], 2); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Aucun médicament dans la base de données.</p>
    <?php endif; ?>
</body>
</html>
