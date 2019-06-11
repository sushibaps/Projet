<?php $titre = 'Liste des articles'; ?>

<?php ob_start(); ?>
<?php while ($data = $posts->fetch())
{ ?>
    <a href="index.php?action=commentCreation">
        <article>
        <header>
            <h1><?php echo $data['title']; ?></h1>
            <time><?php echo $data['date']; ?></time>
        </header>
        <p><?php echo $data['content']; ?></p>
        </article>
    </a>
    <br />
    <hr />
<?php } ?>
<?php $contenu = ob_get_clean(); ?>

<?php require('template.php'); ?>
