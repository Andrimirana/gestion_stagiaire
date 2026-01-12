<?php include '../views/layout/header.php'; ?>

<div class="container mt-4">
    <h2>Modifier le stagiaire</h2>

    <form method="POST">
        <input class="form-control mb-2" name="nom" placeholder="Nom" value="<?= htmlspecialchars($stagiaire['nom']) ?>">
        <input class="form-control mb-2" name="prenom" placeholder="Prénom" value="<?= htmlspecialchars($stagiaire['prenom']) ?>">
        <input class="form-control mb-2" name="email" placeholder="Email" value="<?= htmlspecialchars($stagiaire['email']) ?>">
        <input class="form-control mb-2" name="ecole" placeholder="École" value="<?= htmlspecialchars($stagiaire['ecole']) ?>">
        <input class="form-control mb-2" type="date" name="date_debut" value="<?= $stagiaire['date_debut'] ?>">
        <input class="form-control mb-2" type="date" name="date_fin" value="<?= $stagiaire['date_fin'] ?>">
        <input class="form-control mb-2" name="tuteur" placeholder="Tuteur" value="<?= htmlspecialchars($stagiaire['tuteur']) ?>">

        <select class="form-control mb-2" name="departement_id">
            <option value="">Sélectionner le département</option>
                <?php
                $departements = $pdo->query("SELECT * FROM departements")->fetchAll();
                foreach($departements as $d):
                ?>
                    <option value="<?= $d['id'] ?>" <?= (isset($stagiaire) && $stagiaire['departement_id']==$d['id'])?'selected':'' ?>>
                        <?= htmlspecialchars($d['nom']) ?>
                    </option>
                <?php endforeach; ?>
        </select>

        <button class="btn btn-success">Enregistrer les modifications</button>
        <a href="index.php" class="btn btn-secondary">Annuler</a>
    </form>
</div>

<?php include '../views/layout/footer.php'; ?>
