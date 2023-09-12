<?php

namespace App\Controllers;

use App\Models\Pokemon;
use App\Models\Pokemon_list;
use App\Models\Type;

class MainController extends CoreController {
    

    /**
     * Méthode pour afficher la home page avec la liste de tous les pokemons
     *
     * @return void
     */
    public function home() {
        $this->show('main/pokemon_list', [
            "allPokemons" => Pokemon::findForHome()
        ]);
    }
    /**
     * Méthode pour afficher la page des détails d'un pokemon suivant son numéro
     *
     * @param INT $params
     * @return void
     */
    public function detail($params) {
        $idPokemon = $params['id'];

        $this->show('main/detail', [
            "detail" => Pokemon::findDetail($idPokemon),
            "typeId" => Pokemon_list::findDetailType($idPokemon),
            "typeList" => Type::findAll()
        ]);
    }
    /**
     * Méthode pour afficher la page de liste des types de pokemon
     *
     * @return void
     */
    public function typeList() {
        $this->show('main/type_list', [
            "types" => Type::findAll()
        ]);
    }
    /**
     * Méthode pour afficher la liste de pokemon suivant un type sélectionné
     *
     * @param string $params
     * @return void
     */
    public function byTypeList($params) {
        $idType = $params['id'];
        $this->show('main/pokemon_list', [
            "allPokemons" => Pokemon::findTypedPokemon($idType)
        ]);
    }
}