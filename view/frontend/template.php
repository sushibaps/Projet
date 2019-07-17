<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="public/css/styles.css">
    <title><?php echo $titre ?></title>
</head>
<body>
<nav class="navbar navbar-light navbar-expand-md">
    <div class="container-fluid">
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav">
                <li role="presentation" class="nav-item"><a class="nav-link active" href="index.php">Accueil</a></li>
                <li role="presentation" class="nav-item"><a class="nav-link" href="index.php?action=listPosts">Articles</a></li>
                <li role="presentation" class="nav-item"><a class="nav-link" href="index.php?action=listComments">Commentaires</a></li>
            </ul>
            <a class="btn btn-primary bg-primary border-primary text-left ml-auto" type="button" href="index.php?action=login">Log In</a>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col"></div>
    </div>
</div>
<section>
    <?= $contenu ?>
</section>

</body>
</html>
