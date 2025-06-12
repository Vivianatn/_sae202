<?php

function getTroisParties(){

    try {
        // Connexion à la base de données
        $db = new PDO('mysql:host='.HOST.';dbname='.DBNAME.'', USER, PASSWORD);
    
        // Requête SQL pour sélectionner les jeux triés par ordre alphabétique
        $req = $db->query('SELECT * FROM parties ORDER BY partie_id ASC LIMIT 3');
    
        // Récupération des résultats
        $parties = $req->fetchAll(PDO::FETCH_ASSOC);
    
        // Return des jeux
        return $parties ;
    
    } catch (PDOException $e) {
        // Gestion des erreurs de connexion
        die("Erreur de connexion à la base de données: " . $e->getMessage());
    }


}
