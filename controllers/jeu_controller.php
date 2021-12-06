<?php 

use JeuxRepository;


$jeux = new JeuxRepository($pdo);
$statement= $jeux->find($_GET['id']);
$jeu = $statement->fetch();

?> 