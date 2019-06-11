<?php $title = 'Interface de création de commentaire'; ?>

<?php ob_start(); ?>
<article>
    <h1>Bienvenue dans l'interface de création de commentaire</h1>
    <form action="index.php?action=inputComment" method="post">
        <textarea name="comment" id="comment" cols="100" rows="10" placeholder="Veuillez entrer le texte de votre commentaire."></textarea>
        <label for="author">Votre ptit nom : </label>
        <input type="text" name="author">
        <br />
        <button type="submit">Publier</button>
    </form>
</article>

<?php $contenu = ob_get_clean(); ?>
<?php require ('template.php'); ?>
