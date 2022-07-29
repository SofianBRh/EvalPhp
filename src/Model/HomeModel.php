<?php

namespace App\Model;

use PDO;
use App\database\Database;

class HomeModel
{
    protected $id;

    protected $Name;

    protected $Price;

    protected $Image;

    protected $Quantity;

    protected $pdo;

    const TABLE_NAME = 'Kickz';

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getPDO();
    }

    public function findAll()
    {
        $sql = 'SELECT
                `id`
                ,`Name`
                ,`Price`
                ,`Image`
                ,`Quantity`
                FROM ' . self::TABLE_NAME . '
                ORDER BY `id` ASC;
        ';

        $pdoStatement = $this->pdo->query($sql);
        $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $result;
    }

    public function findById($id)
    {
        $sql = 'SELECT
        `id`
        ,`name`
        ,`Price`
        ,`Image`
        ,`Quantity`
        FROM ' . self::TABLE_NAME . '
        ORDER BY `id` ASC;
        ';

        $pdoStatement = $this->pdo->prepare($sql);
        $pdoStatement->bindValue(':id', $id, PDO::PARAM_INT);
        $result = $pdoStatement->execute();
        $result = $pdoStatement->fetchObject(self::class);
        return $result;
    }

    public function create($name)
    {
        $sql = 'INSERT INTO ' . self::TABLE_NAME . '
                (`name`)
                VALUES
                (:name)
        ';

        $pdoStatement = $this->pdo->prepare($sql);
        $pdoStatement->bindValue(':name', $name, PDO::PARAM_STR);
        
        $result = $pdoStatement->execute();
        
        if (!$result) {
            return false;
        }

        return $this->pdo->lastInsertId();
    }
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Name
     */ 
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Set the value of Name
     *
     * @return  self
     */ 
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * Get the value of Price
     */ 
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * Set the value of Price
     *
     * @return  self
     */ 
    public function setPrice($Price)
    {
        $this->Price = $Price;

        return $this;
    }

    /**
     * Get the value of Image
     */ 
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * Set the value of Image
     *
     * @return  self
     */ 
    public function setImage($Image)
    {
        $this->Image = $Image;

        return $this;
    }

    /**
     * Get the value of Quantity
     */ 
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * Set the value of Quantity
     *
     * @return  self
     */ 
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;

        return $this;
    }
    }

    /**
     * Get the value of id
     */ 
   