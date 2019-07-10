<?php $titre = 'Liste des articles'; ?>

<?php ob_start(); ?>
<?php while ($data = $posts->fetch()) { ?>
    <a href="index.php?action=displayPost&id=<?php echo $data['id']; ?>">
        <article>
            <header>
                <h1><?php echo $data['title']; ?></h1>
                <time><?php echo $data['date']; ?></time>
            </header>
            <p><?php echo $data['content']; ?></p>
        </article>
    </a>
    <br/>
    <hr/>
<?php } ?>
<?php $posts->closeCursor(); ?>
<?php $contenu = ob_get_clean(); ?>

<?php
if (isset($_SESSION['login'])) {
    if (session_id() === $_SESSION['login'])
        require('view/backend/TemplateBack.php');
} else
    require('template.php');
?>
