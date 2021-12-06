<?php 

use JeuxRepository;

$jr = new JeuxRepository($pdo);
$statement= $jr->findAll();
$jeux = $statement->fetchAll();

?> 