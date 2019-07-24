<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $titre = "Une erreur est survenue"; ?>
    <title><?php echo $titre; ?></title>
</head>
<body>
<?php ob_start(); ?>
<p>
    <?php
    if (isset ($error)) {
        switch ($error) {
            case "commentsuppression":
                echo "Une erreur est survenue, nous n'avons pas pu supprimer le commentaire.";
                break;

            case "inputcomment":
                echo "Une erreur est survenue, nous n'avons pas pu créer le commentaire.";
                break;

            case "signalcomment":
                echo "Une erreur est survenue, nous n'avons pas pu prendre en compte votre signalement.";
                break;

            case "login":
                echo "Une erreur est survenue, nous n'avons pas pu vous identifier, veuillez vérifier vos identifiants et réessayer.";
                break;

            case "articlemodification":
                echo "Une erreur est survenue, nous n'avons pas pu trouver l'article à modifier.";
                break;

            case "modifpost":
                echo "Une erreur est survenue, nous n'avons pas pu modifier l'article.";
                break;

            case "displaypost":
                echo "Une erreur est survenue, nous n'avons pas pu trouver l'article à afficher.";
                break;

            case "articlesuppression":
                echo "Une erreur est survenue, nous n'avons pas pu supprimer l'article.";
                break;

            case "unloggeduser":
                echo "Cette partie du site est réservée aux administrateurs, veuillez vous authentifier et réessayer.";
                break;

            default:
                echo "Une erreur est survenue, veuillez réitérer votre opération";
        } ?>
    <a href="index.php">Accueil</a>
    <?php } ?>
</p>
<?php $contenu = ob_get_clean(); ?>
<?php echo $contenu; ?>
</body>
</html>


