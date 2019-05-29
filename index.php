<?php

$db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'password');
$req = $db->query('INSERT INTO posts (title, content) VALUES (Bonjour, Je mange bien)');

echo 'reussi';
