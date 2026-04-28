<?php include "../app/views/partials/header.php"; ?>

<section class="grid metrics">
    <article class="panel metric-card soft">
        <span>Total medicaments</span>
        <strong><?php echo (int) $count; ?></strong>
    </article>
    <article class="panel metric-card soft">
        <span>Prix moyen</span>
        <strong><?php echo number_format((float) $averagePrice, 2, ',', ' '); ?> FC</strong>
    </article>
    <article class="panel metric-card soft">
        <span>Recherche active</span>
        <strong><?php echo $search !== '' ? htmlspecialchars($search) : 'Aucune'; ?></strong>
    </article>
</section>

<section class="panel">
    <div class="toolbar">
        <form class="inline-search" method="GET">
            <input type="hidden" name="page" value="medicaments">
            <input type="text" name="q" value="<?php echo htmlspecialchars($search); ?>" placeholder="Rechercher un medicament ou une description">
            <button class="btn btn-secondary" type="submit">Rechercher</button>
        </form>
        <div class="actions">
            <a class="btn btn-primary" href="?page=medicaments-create">Ajouter un medicament</a>
        </div>
    </div>

    <?php if (empty($medicaments)) : ?>
        <div class="empty">Aucun medicament ne correspond a la recherche actuelle.</div>
    <?php else : ?>
        <table>
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Designation</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($medicaments as $item) : ?>
                    <tr>
                        <td><span class="pill">#<?php echo (int) $item['code_medicament']; ?></span></td>
                        <td><?php echo htmlspecialchars($item['designation']); ?></td>
                        <td><?php echo htmlspecialchars($item['description']); ?></td>
                        <td><?php echo number_format((float) $item['prix'], 2, ',', ' '); ?> FC</td>
                        <td>
                            <div class="table-actions">
                                <form method="POST" action="?page=medicaments-delete&id=<?php echo (int) $item['code_medicament']; ?>" onsubmit="return confirm('Supprimer ce medicament ?');">
                                    <button class="btn btn-danger" type="submit">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</section>

<?php include "../app/views/partials/footer.php"; ?>
