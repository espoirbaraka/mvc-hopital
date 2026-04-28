<?php include "../app/views/partials/header.php"; ?>

<section class="grid two-col">
    <article class="panel">
        <h3>Nouveau medicament</h3>
        <p class="section-copy">Ajoute une nouvelle fiche medicament dans le catalogue hospitalier.</p>

        <form method="POST" action="?page=medicaments-store">
            <div class="form-grid">
                <div class="full">
                    <label for="designation">Designation</label>
                    <input id="designation" type="text" name="designation" value="<?php echo htmlspecialchars($old['designation'] ?? ''); ?>" required>
                </div>

                <div class="full">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" required><?php echo htmlspecialchars($old['description'] ?? ''); ?></textarea>
                </div>

                <div>
                    <label for="prix">Prix</label>
                    <input id="prix" type="number" min="0" step="0.01" name="prix" value="<?php echo htmlspecialchars($old['prix'] ?? ''); ?>" required>
                    <div class="field-copy">Le montant est en FC.</div>
                </div>

                <div style="display: flex; align-items: end;">
                    <div class="actions">
                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                        <a class="btn btn-secondary" href="?page=medicaments">Retour a la liste</a>
                    </div>
                </div>
            </div>
        </form>
    </article>

    <article class="panel soft">
        <h3>Conseils de saisie</h3>
        <p class="section-copy">Une fiche bien remplie rend la recherche future plus simple pour l'equipe.</p>
        <div class="stack">
            <div class="mini-item">
                <strong>Designation claire</strong>
                <span>Utilise le nom principal du produit pour une recherche plus rapide.</span>
            </div>
            <div class="mini-item">
                <strong>Description utile</strong>
                <span>Indique l'usage ou la particularite la plus importante du medicament.</span>
            </div>
            <div class="mini-item">
                <strong>Prix coherent</strong>
                <span>Saisis un montant positif afin de garder des statistiques fiables.</span>
            </div>
        </div>
    </article>
</section>

<?php include "../app/views/partials/footer.php"; ?>
