<?php include '../views/layout/header.php'; ?>

<div class="container mt-4">
    <h2>Liste des stagiaires</h2>

    <a href="index.php?action=create" class="btn btn-primary mb-3">
        Ajouter un stagiaire
    </a>

    <form method="GET" class="mb-3">
        <input type="hidden" name="action" value="list">

        <select name="departement_id" class="form-select w-auto d-inline me-2">
            <option value="">Tous les départements</option>
            <?php foreach($departements as $d): ?>
                <option value="<?= $d['id'] ?>" <?= ((int)$departement_id === (int)$d['id']) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($d['nom']) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <button class="btn btn-primary btn-sm">Filtrer</button>
    </form>

    <table class="table table-bordered">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Actions</th> 
        </tr>

        <?php if (!empty($stagiaires)): ?>
            <?php foreach ($stagiaires as $s): ?>
            <tr class="clickable-row" data-href="index.php?action=view&id=<?= $s['id'] ?>">
            <td>
                
                    <?= htmlspecialchars($s['nom']) ?>
              
            </td>
                <td><?= htmlspecialchars($s['prenom']) ?></td>
                <td><?= htmlspecialchars($s['email']) ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?= $s['id'] ?>" class="btn btn-warning btn-sm me-1">Modifier</a>
                    <a href="index.php?action=delete&id=<?= $s['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Supprimer ce stagiaire ?')">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4" class="text-center">Aucun stagiaire pour ce département.</td>
            </tr>
        <?php endif; ?>
    </table>
</div>

<?php include '../views/layout/footer.php'; ?>
