<?php $titre = 'Jean Forteroche'; ?>

 <?php ob_start(); ?>
    <h2>Bienvenue sur le blog de Jean Forteroche : <strong>Billet pour l'Alaska</strong></h2>
    <p>Vous pouvez suivre les actualités de l'auteur pendant ses voyages, ainsi que lire les articles publiés par celui-ci dans son livre.</p>

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
 <?php } ;?>

 <?php $contenu = ob_get_clean(); ?>

 <?php require ('template.php'); ?>