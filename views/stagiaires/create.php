<?php include '../views/layout/header.php'; ?>

<div class="container mt-4">
    <h2>Ajouter un stagiaire</h2>

    <form method="POST">
        <label for="">Nom</label>
        <input class="form-control mb-2" name="nom" >
        <label for="">Prénoms</label>
        <input class="form-control mb-2" name="prenom">
        <label for="">Email</label>
        <input class="form-control mb-2" name="email" >
        <label for="">Ecole</label>
        <input class="form-control mb-2" name="ecole">
        <label for="">Date de début</label>
        <input class="form-control mb-2" type="date" >
        <label for="">Date de fin</label>
        <input class="form-control mb-2" type="date" >
        <label for="">Tuteur</label>
        <input class="form-control mb-2" name="tuteur">

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

        <button class="btn btn-success">Enregistrer</button>

       

    </form>

    
</div>

<?php include '../views/layout/footer.php'; ?>
