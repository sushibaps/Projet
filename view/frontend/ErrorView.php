<?php $titre = "Une erreur est survenue"; ?>

<?php ob_start(); ?>
<p>Une erreur est survenue, veuillez retourner à la page d'accueil.</p>
<?php $contenu = ob_get_clean(); ?>

<?php require ('template.php'); ?>
