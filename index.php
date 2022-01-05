<?php session_start(); ?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="css.css">
            <title>Connexion</title>
        </head>
        <header>
            <h1 style="font-size: 20px">Promeo</h1>
        </header>
        <body>
        
        <div class="login-form">
            <form action="login.php" method="POST">
                <h2 class="text-center">Authentification</h2>       
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="pass" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button name="submit" class="btn btn-danger btn-lg">Se connecter</button>
                </div>   
            </form>
        </div>
        </body>
        <footer>
<img src="logo promeo.png" height="80" width="80">
AA PROMEO
1, avenue Eugène Gazeau
60300 SENLIS
FRANCE
Tél : 03.44.63.81.63
Fax : 03.44.53.08.12
Évaluation des formations
            </footer>
</html>