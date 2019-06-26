<?php
if(isset($_SESSION['login'])) {?>

<?php $titre = "Création d'articles"; ?>

<?php ob_start(); ?>
    <h1>Bienvenue dans l'interface de création d'article</h1>
    <form action="index.php?action=inputPost" method="post">
        <textarea name="title" id="title" cols="50" rows="1" placeholder="Veuillez entrer le titre de votre article"></textarea>
        <br>
        <textarea name="article" id="article" cols="100" rows="10" placeholder="Veuillez entrer le contenu de votre article"></textarea>
        <button type="submit">Publier</button>
    </form>
<?php $contenu = ob_get_clean(); ?>

<?php require ('view/backend/TemplateBack.php'); ?>

<?php }
else
{
    echo ("Cette partie du site est réservé aux administrateurs, veuillez "); ?>
    <a href="index.php">retourner à l'accueil.</a>
<?php } ?>
