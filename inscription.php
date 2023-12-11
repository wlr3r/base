<?php
if (isset($_POST['signup'])) {
    if ($_POST['pass'] == $_POST['re_pass']) {
        $bdd = new PDO('mysql:host=localhost;dbname=bdd_sak;charset=utf8', 'root', "");

        $reponse = $bdd->prepare('INSERT INTO user (nom, prenom, email, mdp, date, pays, ref_metier) VALUES (:nom, :prenom, :email, :mdp, :ddn, :pays, :metier)');

        $reponse->execute(array(
            'nom'    => $_POST['name'],
            'prenom' => $_POST['forname'],
            'email'  => $_POST['email'],
            'mdp'    => $_POST['pass'],
            'ddn'    => $_POST['birth'],
            'pays'   => $_POST['pays'],
            'metier' => $_POST['metier'], 
        ));

        echo 'La personne a bien été ajoutée !';
    } else {
        echo "Les mots de passe ne correspondent pas.";
    }
} else {
    echo "T'es nul !";
}
?>
