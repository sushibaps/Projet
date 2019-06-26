<?php
    if(isset($_SESSION['login'])) {?>

<?php $titre = "Espace d'administration"; ?>

<?php ob_start(); ?>
    <h1>Bienvenue dans votre espace d'administration.</h1>
    <p>C'est ici que vous pouvez créer, mettre à jour ou supprimer des articles, ainsi que modérer les commentaires des visiteurs.</p>
<?php $contenu = ob_get_clean(); ?>

<?php require ('view/backend/TemplateBack.php'); ?>
<?php }
    else
    {
        echo ("Cette partie du site est réservé aux administrateurs, veuillez "); ?>
        <a href="index.php">retourner à l'accueil.</a>
<?php } ?>
