<?php 

use JeuxRepository;

$oneJeu = new JeuxRepository($pdo);
$statement= $oneJeu->find($jeuId);
$jeu = $statement->fetch();

?> 