 <h1>Bienvenue sur le blog de Jean Forteroche : <strong>Billet pour l'Alaska</strong></h1>
    <p>Vous pouvez suivre les actualités de l'auteur pendant ses voyages, ainsi que lire les articles publiés par celui-ci dans son livre.</p>

 <a href="index.php?action=login">S'identifier</a>
<<<<<<< HEAD
=======

    <header>
        <a href="index.php?action=liste">Liste des articles publiés par Jean Forteroche</a>
    </header>
>>>>>>> ad97ffd6814d0c5988c992fe95a05d8a6b37264d

 <?php $titre = 'Jean Forteroche'; ?>

 <?php ob_start(); ?>
 <?php while ($data = $firstpost->fetch())
 { ?>
     <article>
         <header>
             <h1><?php echo $data['title']; ?></h1>
             <time><?php echo $data['date']; ?></time>
         </header>
         <p><?php echo $data['content']; ?></p>
     </article>
     <hr />
 <?php } ?>
 <?php $contenu = ob_get_clean(); ?>

 <?php require ('template.php'); ?>