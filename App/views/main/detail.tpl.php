<?php $link = $router->generate("page_home") ?>

<section class="wrapper">
    <h2>Détails de <?= $detail->getName() ?></h2>
        <div class="detail">
            <img src="<?= $absoluteURL ?>/img/<?= $detail->getNumber() ?>.png" alt="<?= $detail->getName() ?>">
            <div class="pokemon-detail">
                <h3>#<?= $detail->getNumber() ?> <?= $detail->getName() ?></h3>
                <div class="type-div">
                    <?php foreach ($viewData['typeId'] as $type) : ?>
                        <h4 class="button b-detail" style="background-color: #<?= $viewData['typeList'][$type->getType_id()-1]->getColor() ?>;"><?= $viewData['typeList'][$type->getType_id()-1]->getName() ?></h4>
                    <?php endforeach; ?>
                </div>
                <h3>Statistiques :</h3>
                <div class="type-div">
                    <h5>PV</h5>
                    <p class="number"><?= $detail->getHp() ?></p>
                    <div class="progressbar-wrapper hidden">
                        <div class="progressbar" style="width: <?= $detail->getHp() ?>px" ></div>
                    </div>
                </div>
                <div class="type-div">
                    <h5>Attaque</h5>
                    <p class="number"><?= $detail->getAttack() ?></p>
                    <div class="progressbar-wrapper hidden">
                        <div class="progressbar" style="width: <?= $detail->getAttack() ?>px" ></div>
                    </div>
                </div>
                <div class="type-div">
                    <h5>Défense</h5>
                    <p class="number"><?= $detail->getDefense() ?></p>
                    <div class="progressbar-wrapper hidden">
                        <div class="progressbar" style="width: <?= $detail->getDefense() ?>px" ></div>
                    </div>
                </div>
                <div class="type-div">
                    <h5>Attaque Spé.</h5>
                    <p class="number"><?= $detail->getSpe_attack() ?></p>
                    <div class="progressbar-wrapper hidden">
                        <div class="progressbar" style="width: <?= $detail->getSpe_attack() ?>px" ></div>
                    </div>
                </div>
                <div class="type-div">
                    <h5>Défense Spé.</h5>
                    <p class="number"><?= $detail->getSpe_defense() ?></p>
                    <div class="progressbar-wrapper hidden">
                        <div class="progressbar" style="width: <?= $detail->getSpe_defense() ?>px" ></div>
                    </div>
                </div>
                <div class="type-div">
                    <h5>Vitesse</h5>
                    <p class="number"><?= $detail->getSpeed() ?></p>
                    <div class="progressbar-wrapper hidden">
                        <div class="progressbar" style="width: <?= $detail->getSpeed() ?>px" ></div>
                    </div>
                </div>
            </div>
        </div>
    <a id="link-anim" href="<?= $link ?>" data-url="<?= $link ?>">Retour à la liste</a>
</section>
