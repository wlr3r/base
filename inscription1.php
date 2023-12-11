<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .signup-content {
            display: flex;
            justify-content: space-between;
        }

        .signup-form {
            flex: 1;
            margin-right: 20px;
        }

        .signup-image {
            flex: 1;
            text-align: right;
        }
    </style>
</head>
<body>

    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">S'enregistrer</h2>
                        
                        <form action="inscription.php" method="post">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account"></i></label>
                                <input type="text" name="name" id="name" placeholder="Nom"/>
                            </div>
                            <div class="form-group">
                                <label for="forname"><i class="zmdi zmdi-account"></i></label>
                                <input type="text" name="forname" id="forname" placeholder="Prénom"/>
                            </div>
                            <div class="form-group">
                                <label for="birth"><i class="zmdi zmdi-calendar-alt"></i></label>
                                <input type="date" name="birth" id="birth" placeholder="Date de naissance"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Mot de Passe"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Remettre le mot de passe"/>
                            </div>
                            <div class="form-group">
                                <label for="country"><i class="zmdi zmdi-pin"></i></label>
                                <input type="text" name="pays" id="pays" placeholder="Pays"/>
                            </div>
                            <div class="form-group">
                                <label for="metier"><i class="zmdi zmdi-briefcase"></i></label>
                                <select name="metier" id="metier">

                                    <?php
                                        $bdd = new PDO('mysql:host=localhost;dbname=bdd_sak;charset=utf8', 'root', '');

                                        $resultat = $bdd->query('SELECT * FROM metier');

                                        while ($metier = $resultat->fetch()) {
                                            echo '<option value="' . $metier['id_metier'] . '">' . $metier['libelle'] . '</option>';
                                        }

                                        $resultat->closeCursor();
                                    ?>
       
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>J'accepte <a href="#" class="term-service">les termes d'utilisation</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" class="form-submit" value="S'enregistrer"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="assets/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="connexion.html" class="signup-image-link">Je suis déjà membre</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
