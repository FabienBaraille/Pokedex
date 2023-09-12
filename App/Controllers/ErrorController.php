<?php

namespace App\Controllers;

class ErrorController extends CoreController {
    /**
     * Méthode pour l'affichage de la page erreur en cas d'adresse introuvable
     *
     * @return void
     */
    public function error404Action() {
        $this->show('error/error404');
    }
}