<?php
        namespace App\Model;

                use PDO;
                use App\database\Database;

                class CrudModel
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
                                ,`Imageription`
                                ,`Genre`                        
                                FROM ' . self::TABLE_NAME . '
                                ORDER BY `id` ASC;
                        ';

                        $pdoStatement = $this->pdo->query($sql);
                        $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
                        return $result;
                    }

                    public function create($Name,$Price,$Quantity )
                    {
                        $sql = 'INSERT INTO ' . self::TABLE_NAME . '
                                (`Name`, `Price`, `Quantity`)
                                VALUES
                                (:name, :Price, : (
                                    SELECT (IFNULL(MAX(sort), 0) + 1) FROM ' . self::TABLE_NAME . ' AS `card2` WHERE `list_id` = :list_id
                                ))
                        ';

                        $pdoStatement = $this->pdo->prepare($sql);
                        $pdoStatement->bindValue(':name', $name, PDO::PARAM_STR);
                        $pdoStatement->bindValue(':list_id', $listId, PDO::PARAM_INT);

                        $result = $pdoStatement->execute();}


                        
                        public function ccreate(){
                
                            if(isset($_POST['Name'])){
                        
                        
                        
                        
                        
                        
                                $Name = $_POST['Name'];
                                $Price =$_POST['Price'];
                                $Image =$_POST['Image'];
                                $Quantity = $_POST['Quantity'] ;
                                $Description =$_POST['Description'];
                                $Genre = $_POST['Genre'];
                            
                                $data =[$Name,$Price,$Quantity,$Description,$Genre];
                                
                                
                                if(empty($Name) || empty($Price) || empty($Genre) || empty($Quantity) || empty($Description)){
                                
                                echo'champs manquant';}
                                $sql =  "INSERT INTO Kickz(Name,Price,Image,Quantity,Description,Genre) VALUES( '" . $_POST['Name'] . "', '" . $_POST['Price'] . "', '". $_POST['Image']. "','". $_POST['Quantity'] . "', '" . $_POST['Description'] . "', '" . $_POST['Genre'] . "')";
                                $pdoStatement = $this->pdo->query($sql);
                        $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
                        return $result;
                                
                                    }
                                //     else{
                                    
                                // addproduct($sql,$Name, $Image, $Quantity,$Description ,$Genre);
                                
                                
                                    
                                
                                
                                
                                // }
                                
                    } 
                    
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

