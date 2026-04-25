<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des medicaments</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main class="container">
        <header class="header">
            <div>
                <p class="subtitle">Gestion de pharmacie</p>
                <h1>Liste des medicaments</h1>
            </div>
            <a href="?page=insererMedoc" class="btn btn-primary">Ajouter</a>
        </header>

        <section class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Designation</th>
                        <th>Description</th>
                        <th>Prix (FCFA)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($data)) : ?>
                        <?php foreach ($data as $medoc) : ?>
                            <?php
                            $code = is_array($medoc) ? ($medoc['code'] ?? '') : ($medoc->code ?? '');
                            $designation = is_array($medoc) ? ($medoc['designation'] ?? '') : ($medoc->designation ?? '');
                            $description = is_array($medoc) ? ($medoc['description'] ?? '') : ($medoc->description ?? '');
                            $prix = is_array($medoc) ? ($medoc['prix'] ?? 0) : ($medoc->prix ?? 0);
                            ?>
                            <tr>
                                <td><?= htmlspecialchars((string) $code) ?></td>
                                <td><?= htmlspecialchars((string) $designation) ?></td>
                                <td><?= htmlspecialchars((string) $description) ?></td>
                                <td><?= number_format((float) $prix, 0, ",", " ") ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="4" class="empty">Aucun medicament enregistre.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>