<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex !</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $absoluteURL ?>/css/reset.css">
    <link rel="stylesheet" href="<?= $absoluteURL ?>/css/style.css">
</head>
<body>
    <header>
        <h1>Pokédex, attrappez les tous !</h1>
        <nav>
            <a id="link-anim" href="<?= $router->generate("page_home") ?>" data-url="<?= $router->generate("page_home") ?>">Accueil</a>
            <div class="button-poke up"></div>
            <a id="link-anim" href="<?= $router->generate("page_type_list") ?>" data-url="<?= $router->generate("page_type_list") ?>">Liste des types</a>
        </nav>
    </header>
    <main>