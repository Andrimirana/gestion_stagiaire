<!DOCTYPE html>
<html>
<head>
    <title>Gestion des stagiaires</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<style>
    .sidebar img {
    border-radius: 10px;
    display: block;
    margin: 0 auto; 
    padding-bottom: 20px;
   
}

</style>

<div class="d-flex">
  
    <nav class="sidebar flex-column bg-primary p-3" style="width: 250px; min-height: 100vh;">

        <a href="index.php?action=list">
            <img src="../public/images/logo_intern.png" alt="Logo" style="width: 85px; height: 90px;">
        </a>

        <ul class="nav nav-pills flex-column">
            <li class="nav-itemmb-1">
                <a class="nav-link text-white" href="index.php?action=list">Liste des stagiaires</a>
            </li>
            <li class="nav-item mb-1">
                <a class="nav-link text-white" href="index.php?action=create">Ajouter un stagiaire</a>
            </li>
            <li class="nav-item mb-1">
                <a class="nav-link text-white" href="index.php?action=departements">Liste des départements</a>
            </li>
            <li class="nav-item mb-1">
                <a class="nav-link text-white" href="index.php?action=create_departement">Ajouter un département</a>
            </li>
        </ul>
    </nav>

    
<div class="flex-fill p-3">
       
