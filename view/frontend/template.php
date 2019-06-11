<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titre ?></title> <!-- Ajout du titre en php -->
</head>
<body>
    <main>
        <header>
            <a href="index.php">Accueil</a>
            <a href="index.php?action=listPosts">Journal</a>
            <a href="index.php?action=listComments">Tableau des messages</a>
            <a href="#">À propos de l'auteur</a>
        </header>

        <section>
            <?= $contenu ?>
        </section>

        <footer>
            Blog de Jean Forteroche | Réalisé par Jean Bon
        </footer>
    </main>

</body>
</html>
