<?php

namespace App\Model;

use PDO;
use App\database\Database;

class ModifModel
{
    protected $id;

    protected $Name;

    protected $Price;

    protected $Image;

    protected $Quantity;
    protected $Description;

    protected $pdo;

    const TABLE_NAME = 'Kickz';


    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getPDO();
    }

    public function img(){
        if(isset($_POST['submit'])){
            $Image=$_FILES['Image'];
            move_uploaded_file($_FILES['Image'],'Image'/'$img') ;                                   }
    }
Function modiff(){

$id=$_GET['id'];
$ssql= "UPDATE Kickz SET Name=:Name, Price=:Price, Image=:Image, Quantity=:Quantity, Description=:Description, Genre=:Genre WHERE id=:id"; 
$id=$_GET['id'];
$Name = $_POST["Name"];
   $Price = $_POST["Price"];

   $Quantity = $_POST["Quantity"];
   $Description = $_POST["Description"];
   $Genre= $_POST["Genre"];


           $mysssqlClient =new PDO('mysql:host=localhost;dbname=Footlo;charset=utf8', 'soso', 'Pokemon', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"));
    
        $id=$_GET['id'];
        $Name = $_POST["Name"];
           $Price = $_POST["Price"];
           $Quantity = $_POST["Quantity"];
           $Description = $_POST["Description"];
           $Genre= $_POST["Genre"];
      
         //connexion base de donnée



        $tmpName=$_FILES['Image']['tmp_name'];
        $name=$_FILES['Image']['name'];
        move_uploaded_file($tmpName,'./Image/'.$name) ;
    

       $PdoStatement=$mysssqlClient->prepare($ssql);
       $PdoStatement->bindValue('Name', $Name, PDO::PARAM_STR);
       $PdoStatement->bindValue('Price', $Price, PDO::PARAM_INT);
       $PdoStatement->bindValue('Image', $name, PDO::PARAM_STR);
       $PdoStatement->bindValue('Quantity', $Quantity, PDO::PARAM_INT);
       $PdoStatement->bindValue('Description', $Description, PDO::PARAM_STR);
       $PdoStatement->bindValue('Genre', $Genre, PDO::PARAM_STR);
       $PdoStatement->bindValue('id', $id, PDO::PARAM_INT);

       $PdoStatement -> execute();
        
        
        
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
     * Get the value of pdo
     */ 
    public function getPdo()
    {
        return $this->pdo;
    }

    /**
     * Set the value of pdo
     *
     * @return  self
     */ 
    public function setPdo($pdo)
    {
        $this->pdo = $pdo;

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
}


