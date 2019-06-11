<?php $titre = "Liste des commentaires" ?>

<?php ob_start(); ?>
<?php while ($data = $comments->fetch())
{ ?>
<div>
    <p><?php echo $data['content']; ?></p>
    <p><?php echo $data['author']; ?></p>
    <time><?php echo $data['date']; ?></time>
</div>
<br />
<?php } ?>
<?php $contenu = ob_get_clean(); ?>

<?php require('template.php'); ?>
