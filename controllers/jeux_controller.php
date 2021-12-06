<?php 

use JeuxRepository;

$jr = new JeuxRepository($pdo);
$statement= $jr->findall();
$jeux = $statement->fetchAll();

?> 