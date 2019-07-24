<?php $titre = "Liste des commentaires" ?>

<?php ob_start(); ?>
<?php while ($data = $comments->fetch()) { ?>
    <div>
        <p><?php echo $data['content']; ?></p>
        <p><?php echo $data['author']; ?></p>
        <time><?php echo $data['date']; ?></time>
        <?php if (isset($_SESSION['login'])) {
            if (session_id() === $_SESSION['login']) { ?>
                <a href="index.php?action=commentSuppression&id=<?php echo $data['id_comment']; ?>"
                   title="Supprimer le commentaire"><i
                            class="fas fa-trash-alt text-danger"></i></a>
            <?php }
        } ?>
        <a href="index.php?action=signalComment&id=<?php echo $data['id_comment']; ?>" class="text-danger"><i
                    class="fas fa-exclamation-circle text-danger"></i>Signaler un commentaire inapproprié</a>
        <p>Signalements : <?php echo $data['signalements']; ?></p>
    </div>
    <br/>
<?php } ?>
<?php $comments->closeCursor(); ?>
<?php $contenu = ob_get_clean(); ?>

<?php
if (isset($_SESSION['login'])) {
    if (session_id() === $_SESSION['login'])
        require('view/backend/TemplateBack.php');
} else
    require('template.php');
?>
