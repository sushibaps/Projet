<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="public/css/styles.css">
    <title><?php if (isset($titre)) {
            echo $titre;
        } ?></title>
</head>
<body>
<main>
    <header>
        <nav>
            <a href="index.php?action=AccueilBackEnd">Accueil</a>
            <a href="index.php?action=articleCreation">Créer un article</a>
            <a href="index.php?action=listPosts">Liste des articles</a>
            <a href="index.php?action=listComments">Liste des commentaires</a>
            <a href="index.php?action=Disconnect">Déconnexion</a>
        </nav>
    </header>

    <section>
        <?php if (isset($contenu)) {
            echo $contenu;
        }
        ?>
    </section>

    <footer>
        Blog de Jean Forteroche | Tous droits réservés
        <nav>
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
        </nav>
    </footer>
</main>

</body>
</html>
