<?php
require_once '../models/stagiaires.php';
require_once '../models/departements.php';

$action = $_GET['action'] ?? 'index';


if ($action == 'create') {
    if ($_POST) {
        Stagiaire::create($_POST);
        header("Location: index.php");
    }
    require '../views/stagiaires/create.php';
}

if ($action == 'delete') {
    Stagiaire::delete($_GET['id']);
    header("Location: index.php");
}

if ($action == 'edit') {
    $stagiaire = Stagiaire::find($_GET['id']);

    if ($_POST) {
        Stagiaire::update($_GET['id'], $_POST);
        header("Location: index.php");
        exit;
    }

    require '../views/stagiaires/edit.php';
}

if ($action == 'index' || $action == 'list') {
   
    $departements = Departement::all();

   
    $departement_id = $_GET['departement_id'] ?? '';

   
    if ($departement_id) {
        $stagiaires = Stagiaire::getByDepartement($departement_id);
    } else {
        $stagiaires = Stagiaire::all();
    }

    require '../views/stagiaires/index.php';
}

if ($action == 'view' && isset($_GET['id'])) {
    $stagiaire = Stagiaire::find($_GET['id']); 
    require '../views/stagiaires/view.php'; 
}

