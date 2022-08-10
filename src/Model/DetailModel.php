<?php
namespace App\Model;


use PDO;
use App\database\Database;

class DetailModel{

   

   
  
    
  
    
        protected $id;
    
        protected $Name;
    
        protected $Price;
    
        protected $Image;
    
        protected $Quantity;
        protected $Description;
    protected $genre;
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
                    ,`Description`
                    ,`genre`
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
            ,`Name`
            ,`Price`
            ,`Image`
            ,`Quantity`
            ,`Description`
            ,`Genre`
            FROM ' . self::TABLE_NAME . '
            WHERE id = ' . $id;
    
            $pdoStatement = $this->pdo->query($sql);
        //     $pdoStatement->bindValue(':id', $id, PDO::PARAM_INT);
            $result = $pdoStatement->execute();
            $result = $pdoStatement->fetchObject(self::class);
            return $result;
        }
    
        public function create($name)
        {
            $sql = 'INSERT INTO ' . self::TABLE_NAME . '
                    (`Name` , `Price`,`Image`,`Quantity`)
                    VALUES
                    (:name, :Price , :Image, :Quantity,)
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
        

        /**
         * Get the value of Description
         */ 
        public function getDescription()
        {
                return $this->Description;
        }

        /**
         * Set the value of Description
         *
         * @return  self
         */ 
        public function setDescription($Description)
        {
                $this->Description = $Description;

                return $this;
        }

    /**
     * Get the value of genre
     */ 
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     *
     * @return  self
     */ 
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }
    }
        
    
        


