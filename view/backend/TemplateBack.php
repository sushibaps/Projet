<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titre; ?></title>
</head>
<body>
<main>
    <header>
        <nav>
            <a href="index.php?action=articleCreation">Créer un article</a>
            <a href="#">Liste des articles</a>
            <a href="#">Liste des commentaires</a>
            <a href="index.php?action=Disconnect">Déconnexion</a>
        </nav>
    </header>

    <section>
        <?php if (isset($contenu))
        {
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
