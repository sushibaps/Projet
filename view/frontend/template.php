<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css/bootstrap.min.css">
    <title><?php echo $titre ?></title>
</head>
<body>
    <main>
        <header>
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
                <div class="container">
                    <a class="navbar-brand" href="index.php">Accueil</a>
                    <div id="navcol-1" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" href="index.php?action=listPosts">Articles</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" href="index.php?action=listComments">Messages</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" href="index.php?action=listPosts">A propos de Jean</a>
                            </li>
                        </ul>
                        <span class="navbar-text actions">
                            <a class="btn btn-light action-button" role="button" href="index.php?action=login">Log in</a>
                        </span>
                    </div>
                </div>
            </nav>
        </header>

        <section>
            <?= $contenu ?>
        </section>

        <div class="footer-basic">
            <footer>
                <div class="social">
                    <a href="#">
                        <i class="icon ion-social-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="icon ion-social-snapchat"></i>
                    </a>
                    <a href="#">
                        <i class="icon ion-social-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="icon ion-social-facebook"></i>
                    </a>
                </div>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="index.php">Accueil</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="index.php?action=listPosts">Articles</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="index.php?action=listComments">Commentaires</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">A propos de Jean</a>
                    </li>
                </ul>
                <p class="copyright">Jean Forteroche © 2019 Tous droits réservés</p>
            </footer>

        </div>
    </main>

</body>
</html>
