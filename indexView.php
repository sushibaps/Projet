<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Jean Forteroche</title>
</head>
<body>
    <h1>Billet simple pour l'Alaska</h1>
    <p>Derniers posts mis en ligne :</p>

    <?php
    while ($donnees = $req->fetch()) {
        ?>
        <div class="posts">
            <h3>
                <?php echo htmlspecialchars($donnees['title']); ?>
                <em>le <?php echo $donnees['date']; ?></em>
            </h3>

            <p>
                <?php
                echo n12br(htmlspecialchars($donnees['content']));
                ?>
                <br/>
                <em><a href="#">Commentaires</a></em>
            </p>
        </div>
        <?php
    }
    $req->closeCursor();
    ?>

</body>
</html>