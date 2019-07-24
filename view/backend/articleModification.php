<?php
if(isset($_SESSION['login']) AND session_id() === $_SESSION['login']) {?>

<?php $titre = "Modification d'article"; ?>

<?php ob_start(); ?>
    <h1>Bienvenue dans l'interface de modification d'article</h1>
    <form action="index.php?action=modifPost&id=<?php echo $post['id']; ?>" method="post">
        <textarea name="title" id="title" cols="50" rows="1"><?php echo $post['title']; ?></textarea>
        <br>
        <textarea name="article" id="article" cols="100" rows="10"><?php echo $post['content']; ?></textarea>
        <button type="submit">Modifier</button>
    </form>
<?php $contenu = ob_get_clean(); ?>

<?php require ('view/backend/TemplateBack.php'); ?>

<?php }
else
{
    echo ("Cette partie du site est réservé aux administrateurs, veuillez "); ?>
    <a href="index.php">retourner à l'accueil.</a>
<?php } ?>
