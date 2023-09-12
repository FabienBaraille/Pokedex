<?php

namespace App\Controllers;

class CoreController {

    protected $router;

    public function __construct($router)
    {
        $this->router = $router;
    }

    /**
     * Méthode permettant d'afficher une page suivant son nom et transmettre les infos nécessaire
     *
     * @param string $viewName
     * @param array $viewData
     * @return void
     */
    public function show($viewName, $viewData = []) {
        
        $viewData['router'] = $this->router;
        $viewData['absoluteURL'] = $_SERVER['BASE_URI'];

        extract($viewData);

        require_once __DIR__ . '/../views/layout/header.tpl.php';
        require_once __DIR__ . '/../views/'. $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/layout/footer.tpl.php';
    }
}