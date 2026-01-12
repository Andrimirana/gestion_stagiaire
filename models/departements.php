<?php
require_once '../config/database.php';

class Departement {

   
    public static function all() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM departements ORDER BY nom ASC");
        return $stmt->fetchAll();
    }

   
    public static function find($id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM departements WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

  
    public static function allWithCount() {
        global $pdo;
        $sql = "SELECT d.id, d.nom, COUNT(s.id) AS nb_stagiaires
                FROM departements d
                LEFT JOIN stagiaires s ON s.departement_id = d.id
                GROUP BY d.id
                ORDER BY d.nom ASC";
        return $pdo->query($sql)->fetchAll();
    }
}
