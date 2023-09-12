<?php

namespace App\Models;

use App\utils\Database;
use PDO;

class Pokemon_list {
    private $id;
    private $pokemon_number;
    private $type_id;

    /**
     * Méthode pour récupérer les types d'un pokemon suivant son numéro
     *
     * @param INT $number
     * @return Object
     */
    public static function findDetailType($number) {
        $pdo = Database::getPDO();
        $query = $pdo->prepare("SELECT * FROM `pokemon_type` WHERE `pokemon_number` = :number");
        $query->execute([
            ":number" => $number
        ]);
        return $query->fetchAll(PDO::FETCH_CLASS, self::class);
    }
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of pokemon_number
     */ 
    public function getPokemon_number()
    {
        return $this->pokemon_number;
    }

    /**
     * Get the value of type_id
     */ 
    public function getType_id()
    {
        return $this->type_id;
    }
}