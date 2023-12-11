<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bdd = new PDO('mysql:host=localhost;dbname=bdd_sak;charset=utf8', 'root', '');

    $id_user = $_POST['user'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp']; 
    $age = $_POST['age'];
    $pays = $_POST['pays'];

    $requete = $bdd->prepare('UPDATE user SET prenom = ?, nom = ?, email = ?, mdp = ?, age = ?, pays = ? WHERE id_user = ?');
    $requete->execute([$prenom, $nom, $email, $mdp, $age, $pays, $id_user]);

    echo 'Utilisateur mis à jour avec succès.';
}
?>
