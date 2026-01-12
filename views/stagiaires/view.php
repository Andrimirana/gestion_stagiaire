<?php include '../views/layout/header.php'; ?>

<div class="container mt-4">
    <h2>Détails du stagiaire</h2>

    <a href="index.php?action=list" class="btn btn-secondary mb-3">← Retour</a>

    <table class="table table-bordered w-50">
        <tr>
            <th>Nom</th>
            <td><?= htmlspecialchars($stagiaire['nom']) ?></td>
        </tr>
        <tr>
            <th>Prénom</th>
            <td><?= htmlspecialchars($stagiaire['prenom']) ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= htmlspecialchars($stagiaire['email']) ?></td>
        </tr>
        <tr>
            <th>École</th>
            <td><?= htmlspecialchars($stagiaire['ecole']) ?></td>
        </tr>
        <tr>
            <th>Date début</th>
            <td><?= $stagiaire['date_debut'] ?></td>
        </tr>
        <tr>
            <th>Date fin</th>
            <td><?= $stagiaire['date_fin'] ?></td>
        </tr>
        <tr>
            <th>Tuteur</th>
            <td><?= htmlspecialchars($stagiaire['tuteur']) ?></td>
        </tr>
        <tr>
            <th>Département</th>
            <td><?= htmlspecialchars($stagiaire['departement']) ?></td>
        </tr>
    </table>

</div>

<?php include '../views/layout/footer.php'; ?>
