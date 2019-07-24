<?php
if (isset($_SESSION['login']) AND session_id() === $_SESSION['login']) { ?>

    <?php $titre = "Création d'articles"; ?>

    <?php ob_start(); ?>
    <h1>Bienvenue dans l'interface de création d'article</h1>
    <form action="index.php?action=inputPost" method="post">
        <textarea name="title" id="title" cols="50" rows="2"
                  placeholder="<?php if (isset($_POST['title']) AND $_POST['title'] != "") {
                      echo $_POST['title'];
                  } else {
                      echo "Veuillez entrer le titre de votre article";
                  } ?>" required></textarea>
        <br>
        <textarea name="article" id="article" cols="100" rows="10"
                  placeholder="<?php if (isset($_POST['article']))
                      echo $_POST['article'];
                  else
                      echo "Veuillez entrer le contenu de votre article"; ?>" required></textarea>
        <button type="submit">Publier</button>
    </form>
    <?php if (isset($error)) {
        ?> <p class="text-danger"><?php echo $error; ?></p> <?php } ?>

    <?php $contenu = ob_get_clean(); ?>

    <?php require('view/backend/TemplateBack.php'); ?>

<?php } else {
    echo "Cette partie du site est réservée aux administrateurs, veuillez retourner à l'"; ?>
    <a href="index.php">accueil.</a>
    <?php require('view/frontend/template.php');
} ?>
