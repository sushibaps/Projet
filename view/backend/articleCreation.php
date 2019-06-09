<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Création d'article</title>
</head>
<body>
    <h1>Bienvenue dans l'interface de création d'article</h1>
    <form action="index.php?action=input" method="post">
        <textarea name="title" id="title" cols="50" rows="1" placeholder="Veuillez entrer le titre de votre article"></textarea>
        <br>
        <textarea name="article" id="article" cols="100" rows="10" placeholder="Veuillez entrer le contenu de votre article"></textarea>
        <button type="submit">Publier</button>
    </form>

</body>
</html>
