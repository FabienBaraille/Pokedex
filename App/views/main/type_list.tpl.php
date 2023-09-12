<section class="wrapper type-section">
    <?php foreach ($types as $type) : 
        $link = $router->generate("page_type_by_list", ['id' => $type->getId()]) ?>
        <a id="link-anim" href="<?= $link ?>" data-url="<?= $link ?>" class="button type-list" style="background-color: #<?= $type->getColor() ?>;" ><?= $type->getName() ?></a>
    <?php endforeach; ?>
</section>