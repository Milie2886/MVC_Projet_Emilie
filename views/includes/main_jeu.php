<div class="container">
    <h1 class="text-sm-center p-2"><?= $jeu['nom']?></h1>
    <br>
    <div class="container text-center justify-content-center">
        <img class="img-responsive rounded" src=<?= $jeu['image_name']?> alt="" width="450" height="550"/>
        <p class="text-sm-center m-3">Résumé : <?= $jeu['description']?></p>
        <a href="?page=jeux" class="btn btn-info m-3">Retour à la liste des jeux</a>
        <a href="?page=home" class="btn btn-success m-3">Home</a>
    </div>
</div>

