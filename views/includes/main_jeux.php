<main role="main" class="container">

    <div>
        <h2 class="text-center p-2">Liste des jeux disponibles</h2>
        <div class="container">
        <div class="row mb-5">
        <?php foreach ($jeux as $jeu): ?>
            <div class="col-md-4">
            <div class="mw-100 overflow-hidden">
                <div class="zoom">
                    <img src=<?= $jeu['image_name']?> alt="image" class="img-fluid w-100 h-100 rounded">
                </div>
                <div class="metadata text-center pt-2">
                    <h3><?= $jeu['nom']?></h3>
                </div>
                <a href="?page=jeu&id=<?= $jeu['id'] ?>" class="btn btn-primary w-100 mb-2">+ de détails</a>
            </div>
            </div>
        <?php endforeach; ?>
        </div>
        </div>
    </div>

</main><!-- /.container -->