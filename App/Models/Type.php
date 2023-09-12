<?php

namespace App\Models;

use App\utils\Database;
use PDO;

class Type {
    private $id;
    private $name;
    private $color;

    /**
     * Méthode pour récupérer tous les types de pokémons dans la BDD
     *
     * @return Object
     */
    public static function findAll() {
        $pdo = Database::getPDO();
        $sql = "SELECT * FROM `type`";
        $query = $pdo->prepare($sql);
        $query->execute();
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
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }
}