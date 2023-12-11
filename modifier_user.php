<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier un Utilisateur</title>
</head>
<body>

    <h2>Modifier un Utilisateur</h2>

    <form action="modificateur_user1.php" method="post">
        <label for="user">Sélectionner un utilisateur :</label>
        <select name="user" id="user">
            <?php
                $bdd = new PDO('mysql:host=localhost;dbname=bdd_sak;charset=utf8', 'root', '');

                $resultat = $bdd->query('SELECT id_user, nom, prenom FROM user');

                while ($user = $resultat->fetch()) {
                    echo '<option value="' . $user['id_user'] . '">' . $user['prenom'] . ' ' . $user['nom'] . '</option>';
                }

                $resultat->closeCursor();
            ?>
        </select>

        <br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" placeholder="Nouveau prénom" required>

        <br><br>

        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" placeholder="Nouveau nom" required>

        <br><br>

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" placeholder="Nouvel email" required>

        <br><br>

        <label for="mdp">Mot de passe :</label>
        <input type="password" name="mdp" id="mdp" placeholder="Nouveau mot de passe">

        <br><br>

        <label for="age">Âge :</label>
        <input type="text" name="age" id="age" placeholder="Nouvel âge">

        <br><br>

        <label for="pays">Pays :</label>
        <input type="text" name="pays" id="pays" placeholder="Nouveau pays">

        <br><br>

        <input type="submit" value="Modifier">
    </form>

</body>
</html>
