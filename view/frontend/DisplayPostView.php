<?php $titre = $post['title']; ?>

<?php ob_start(); ?>
    <article>
        <header>
            <h1><?php echo $post['title']; ?></h1>
        </header>
        <p><?php echo $post['content']; ?></p>
        <time><?php echo $post['date']; ?></time>
        <?php if (isset($_SESSION['login'])) {
            if (session_id() === $_SESSION['login']) {
                ?><a href="index.php?action=articleSuppression&id=<?php echo $post['id']; ?>"
                     title="Supprimer l'article"><i
                            class="fas fa-trash-alt text-danger"></i></a>
                <br/>
                <a href="index.php?action=articleModification&id=<?php echo $post['id']; ?>">Modifier l'article</a>
            <?php }
        } ?>
    </article>
    <br/>
<?php while ($data = $comment->fetch()) { ?>
    <aside>
        <p><?php echo $data['content']; ?></p>
        <p>Ecrit par <?php echo $data['author']; ?> le <?php echo $data['date']; ?>.</p>
        <?php if (isset($_SESSION['login'])) {
            if (session_id() === $_SESSION['login']) { ?>
                <a href="index.php?action=commentSuppression&id=<?php echo $data['id_comment']; ?>"
                   title="Supprimer le commentaire"><i
                            class="fas fa-trash-alt text-danger"></i></a>
            <?php }
        } ?>
        <a href="index.php?action=signalComment&id=<?php echo $data['id_comment']; ?>" class="text-danger"><i
                    class="fas fa-exclamation-circle text-danger"></i>Signaler un commentaire inapproprié</a>
        <p>Signalements : <?php if ($data['signalements'] > 0)
                echo $data['signalements'];
            else
                echo 0; ?></p>
    </aside>
    <br/>
<?php } ?>
    <hr>
    <article>
        <h1>Bienvenue dans l'interface de création de commentaire</h1>
        <form action="index.php?action=inputComment&id=<?php echo $post['id']; ?>" method="post">
        <textarea name="comment" id="comment" cols="100" rows="10"
                  placeholder="Veuillez entrer le texte de votre commentaire." required></textarea>

            <?php if (isset($_SESSION['login'])) {
                if (session_id() === $_SESSION['login']) {
                    ?><input type="text" name="author" value="Jean Forteroche">
                    <?php
                }
            } else { ?>
                <label for="author">Votre ptit nom : </label>
                <input type="text" name="author" required>
                <br/>
            <?php } ?>
            <button type="submit">Publier</button>
        </form>
    </article>
    <br/>
<?php $contenu = ob_get_clean(); ?>

<?php
if (isset($_SESSION['login'])) {
    if (session_id() === $_SESSION['login'])
        require('view/backend/TemplateBack.php');
} else
    require('template.php');
?>