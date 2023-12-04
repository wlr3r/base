<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sélection et Suppression d'Utilisateur</title>
</head>
<body>

    <h1>Sélection et Suppression d'Utilisateur</h1>

    <form action="traitement_suppression.php" method="post">
        <label for="utilisateur">Choisissez un utilisateur :</label>
        <select id="utilisateur" name="utilisateur">
            <?php
            $bdd = new PDO('mysql:host=localhost;dbname=bdd_sak;charset=utf8', 'root', '');
            $requete = "SELECT id_user, nom, email, age, date FROM user";
            $resultat = $bdd->query($requete);

            foreach ($resultat as $utilisateur) {
                $dateNaissance = new DateTime($utilisateur['date']); //convert date naissance  user en date en objet
                $aujourdHui = new DateTime(); // date ajd
                $age = $aujourdHui->diff($dateNaissance)->y; //calc age diff date ajd

                echo "<option value='" . $utilisateur['id_user'] . "'>" . "ID: " . $utilisateur['id_user'] . " - " . $utilisateur['nom'] . " - Email: " . $utilisateur['email'] . " - Age: " . $age . "</option>";
            }
            ?>
        </select>

        <input type="submit" value="Supprimer l'utilisateur">
    </form>

</body>
</html>
