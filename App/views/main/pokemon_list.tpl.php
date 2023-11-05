<section class="wrapper home">
    <?php foreach ($allPokemons as $pokemon) : 
        $link = $router->generate("page_detail",["id" => $pokemon->getNumber()])?>
        <div class="pokemon-card">
            <a id="link-anim" href="<?= $link ?>" data-url="<?= $link ?>">
            <img src="<?= $absoluteURL ?>/img/<?= $pokemon->getNumber() ?>.png" alt="<?= $pokemon->getName() ?>">
            #<?= $pokemon->getNumber() ?> <?= $pokemon->getName() ?>
            </a>
        </div>
    <?php endforeach; ?>
</section>