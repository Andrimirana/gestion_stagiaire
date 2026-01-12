<?php
require_once '../config/database.php';

class Stagiaire {

    public static function all() {
        global $pdo;
        return $pdo->query("SELECT * FROM stagiaires")->fetchAll();
    }

    public static function create($data) {
        global $pdo;
    
        $sql = "INSERT INTO stagiaires 
        (nom, prenom, email, ecole, date_debut, date_fin, tuteur)
        VALUES (?, ?, ?, ?, ?, ?, ?)";
    
        $stmt = $pdo->prepare($sql);
    
        return $stmt->execute([
            $data['nom'],
            $data['prenom'],
            $data['email'],
            $data['ecole'],
            $data['date_debut'],
            $data['date_fin'],
            $data['tuteur']
        ]);
    }

    public static function delete($id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM stagiaires WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public static function update($id, $data) {
        global $pdo;
    
        $sql = "UPDATE stagiaires SET 
                    nom = ?, 
                    prenom = ?, 
                    email = ?, 
                    ecole = ?, 
                    date_debut = ?, 
                    date_fin = ?, 
                    tuteur = ?
                WHERE id = ?";
    
        $stmt = $pdo->prepare($sql);
    
        return $stmt->execute([
            $data['nom'],
            $data['prenom'],
            $data['email'],
            $data['ecole'],
            $data['date_debut'],
            $data['date_fin'],
            $data['tuteur'],
            $id
        ]);
    }

    
    public static function getByDepartement($departement_id) {
        global $pdo;
        $stmt = $pdo->prepare("
            SELECT s.*, d.nom AS departement
            FROM stagiaires s
            LEFT JOIN departements d ON s.departement_id = d.id
            WHERE s.departement_id = ?
        ");
        $stmt->execute([$departement_id]);
        return $stmt->fetchAll();
    }
    
    public static function alle() {
        global $pdo;
        $stmt = $pdo->query("
            SELECT s.*, d.nom AS departement
            FROM stagiaires s
            LEFT JOIN departements d ON s.departement_id = d.id
        ");
        return $stmt->fetchAll();
    }
    
    public static function find($id) {
        global $pdo;
        $stmt = $pdo->prepare("
            SELECT s.*, d.nom AS departement
            FROM stagiaires s
            LEFT JOIN departements d ON s.departement_id = d.id
            WHERE s.id = ?
        ");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    
    
}

