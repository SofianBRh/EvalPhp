<?php 



namespace App\Model;

use PDO;
use App\database\Database;

class DeleteModel
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
 
function delete(){

if(isset($_GET['id']))
{  $id=$_GET['id'];
   
   
    $pdoStatement = $this->pdo->query($sql);
    $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
    return $result;

$pdoStatement -> query ("DELETE FROM `inventory` WHERE `id`= $id");
}
// header('location:?page=Ajout');


}


}


?>