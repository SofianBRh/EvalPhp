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

    protected $pdo;

    const TABLE_NAME = 'Kickz';


    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getPDO();
    }
Function modif(){
$id=$_GET['id'];
    if (isset($_POST['Name'])){
        $id=$_GET['id'];
        $Name = $_POST["Name"];
           $Price = $_POST["Price"];
           $Image = $_POST["Image"];
           $Quantity = $_POST["Quantity"];
           $Description = $_POST["Description"];
           $Genre= $_POST["Genre"];
         //connexion base de donnée
           $mysssqlClient =new PDO('mysql:host=localhost;dbname=Footlo;charset=utf8', 'soso', 'Pokemon', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"));
          
        
        $ssql= "UPDATE Kickz SET Name=?, Price=?, Image=?, Quantity=?, Description=?, Genre=? WHERE id=? ";
       $mysssqlClient->prepare($ssql)->execute([$Name, $Price, $Image, $Quantity, $Description, $Genre,$id]);
        
        
        
        }

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
}


