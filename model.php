<?php
function getPosts()
{
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=projet4;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    $req = $bdd->query('SELECT title, content, author, DATE_FORMAT(date, \' le %d/%m/%Y à %Hh/%imin/%ss\') AS date FROM posts ORDER BY date');

    return $req;
}
?>
