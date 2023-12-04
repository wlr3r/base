<?php

$bdd = new PDO('mysql:host=localhost;dbname=bdd_sak;charset=utf8', 'root', '');

$reponse = $bdd->prepare('SELECT * FROM user WHERE email = :email AND mdp = :mdp');

$reponse->execute(array(
    'email' => $_POST['your_email'],
    'mdp' => $_POST['your_pass'],
));

$donnees = $reponse->fetchAll();

if(count($donnees) > 0) {
    echo 'La personne a bien été connectée !';
} else {
    echo 'Identifiants incorrects. Veuillez réessayer.';
}

?>
