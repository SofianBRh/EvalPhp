<?php
namespace App\database;

use App\database\Database;



Class Kickz
{
    private $pdo;
    public function __construct()
    {
        $connection = new Database;
        $this->pdo = $connection->getPDO();
    }
    
    function addKickz($Name,$Price,$Image,$Quantity){
        $statement = $this->pdo->prepare("INSERT INTO Kickz (Name, Price, Image, Quantity) VALUES ( :Name , :Price , :Image , :Quantity )");  
        $statement->bindParam(':Name', $_POST["Name"]);
        $statement->bindParam(':Price', $_POST["Price"]);
        $statement->bindParam(':Image', $_POST["Image"]);
        $statement->bindParam(':Quantity', $_POST["Quantity"]);
        $statement->execute();
        }  
    }