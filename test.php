<?php
echo 'Coucou';
for ($i = 0; $i < 5; $i++)
    echo $i;

$data = file_get_contents('http://mbapseres.fr/Projet%201/index.html');
echo $data;
file_put_contents('pouet.txt', $data);