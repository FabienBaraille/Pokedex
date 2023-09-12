<?php

namespace App\Models;

use App\utils\Database;
use PDO;

class Pokemon {
    private $id;
    private $name;
    private $hp;
    private $attack;
    private $defense;
    private $spe_attack;
    private $spe_defense;
    private $speed;
    private $number;
    /**
     * Méthode pour récupérer tous les pokémons de la BDD par ordre croissant de numéro
     *
     * @return Object
     */
    public static function findForHome() {
        $pdo = Database::getPDO();
        $query = $pdo->prepare("SELECT `name`, `number` FROM `pokemon` ORDER BY `number`"); 
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, self::class);
    }
    /**
     * Méthode pour récupérer toutes les infos d'un pokémon dans la BDD suivant son numéro
     *
     * @param INT $number
     * @return Object
     */
    public static function findDetail($number) {
        $pdo = Database::getPDO();
        $query = $pdo->prepare("SELECT * FROM `pokemon` WHERE `number` = :number"); 
        $query->execute([
            ":number" => $number
        ]);
        return $query->fetchObject(self::class);
    }
    /**
     * Méthode pour récupérer tous les pokémons suivant un type défini
     *
     * @param STRING $type
     * @return OBJECT
     */
    public static function findTypedPokemon($type) {
        $pdo = Database::getPDO();
        $sql = "SELECT pokemon.* FROM `pokemon` 
        INNER JOIN `pokemon_type` ON pokemon.number = pokemon_type.pokemon_number
        WHERE pokemon_type.type_id = :type";
        $query = $pdo->prepare($sql);
        $query->execute([
            ":type" => $type
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
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of hp
     */ 
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Get the value of attack
     */ 
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * Get the value of defense
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Get the value of spe_attack
     */ 
    public function getSpe_attack()
    {
        return $this->spe_attack;
    }

    /**
     * Get the value of spe_defense
     */ 
    public function getSpe_defense()
    {
        return $this->spe_defense;
    }

    /**
     * Get the value of speed
     */ 
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }
}