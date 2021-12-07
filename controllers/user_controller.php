<?php

use UserRepository;

$ur = new UserRepository($pdo);
$statement = $ur->findall();
$users = $statement->fetchAll();

/*ici faire une fonction login qui compare la saisie de l'utilisateur avec la bdd et le connecte avec un retour sur 
la page d'accueil et message flash de bienvenue*/

?>