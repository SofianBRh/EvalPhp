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

                    protected $Genre;

                    protected $pdo;

                    protected $Description;

                    
                    const TABLE_NAME = 'Kickz';

                    public function __construct()
                    {
                        $database = new Database();
                        $this->pdo = $database->getPDO();
                    }
                    public function filter(){
                        $keywords=$_GET['keywords'];
                        $valider=$_GET['valider'];
                        if(isset($valider) && !empty(trim($keywords))){
                            $sql = "SELECT * FROM Kickz WHERE Name LIKE '%$keywords%'";
                            $query = $this->pdo->prepare($sql);
                            $query->execute();
                            $result = $query->fetchAll(PDO::FETCH_ASSOC);
                            return $result;
                        }

                        
                    }
                    // function qui recupere mes donné dans ma bd 
                    
                    public function findAll()
                    {
                        $contratRequete="" ; 
                        $lieuRequete=""; 
                     
                    
                            if (!empty($contrat)){
                    
                                $contratRequete = " WHERE Genre LIKE '" .$contrat."'";
                            }
                    
                          
                    
                                $nbElements = "SELECT 
                                        COUNT(id) 
                                        FROM " . self::TABLE_NAME ."
                                        $contratRequete
                                        $lieuRequete";
                        $sql = 'SELECT
                                `id`
                                ,`Name`
                                ,`Price`
                                ,`Image`
                                ,`Quantity`
                                ,`Image`
                                ,`Description`
                                ,`Genre`                        
                                FROM ' . self::TABLE_NAME . '
                                ORDER BY `id` ASC;
                        ';

                        $pdoStatement = $this->pdo->query($sql);
                        $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
                        return $result;
                    }
// funcgtion qui me permet de créer de nouveaux produit dans ma bdd 
                   

                        
                        public function ccreate($data){
                
                            if(isset($data['Name'])){

                                $Name = $data['Name'];
                                $Price =$data['Price'];
                                $Image =$data['Image'];
                                $Quantity = $data['Quantity'] ;
                                $Description =$data['Description'];
                                $Genre = $data['Genre'];
                            
                             
                                
                                
                                if(empty($Name) || empty($Price) || empty($Genre) || empty($Quantity) || empty($Description)){
                                
                                echo'champs manquant';}
                                $sql =  "INSERT INTO Kickz(Name,Price,Image,Quantity,Description,Genre) VALUES( '" . $data['Name'] . "', '" . $data['Price'] . "', '". $data['Image']['name']. "','". $data['Quantity'] . "', '" . $data['Description'] . "', '" . $data['Genre'] . "')";
                                $pdoStatement = $this->pdo->query($sql);
                        $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

                        return $result;
                                
                                    }
                              
                                }  

                        public function modif($data){
                
                            if(isset($data['Name'])){

                                $Name = $data['Name'];
                                $Price =$data['Price'];
                                $Image =$data['Image'];
                                $Quantity = $data['Quantity'] ;
                                $Description =$data['Description'];
                                $Genre = $data['Genre'];
                            
                             
                                
                                
                                if(empty($Name) || empty($Price) || empty($Genre) || empty($Quantity) || empty($Description)){
                                
                                echo'champs manquant';}
                                $sql =  "UPDATE Kickz  SET (Name,Price,Image,Quantity,Description,Genre) VALUES( '" . $data['Name'] . "', '" . $data['Price'] . "', '". $data['Image']['name']. "','". $data['Quantity'] . "', '" . $data['Description'] . "', '" . $data['Genre'] . "')";
                                $pdoStatement = $this->pdo->query($sql);
                        $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

                        return $result;
                                
                                    }
                              
                                }  
                    
                                public function img(){
                                    if(isset($_POST['submit'])){
                                        $img=$_FILES['Image'];
                                        move_uploaded_file($_FILES['Image'],'Image'/'$img') ;                                   }
                                }
                     public function delete($id){
                        
                        $sql= ("DELETE FROM Kickz WHERE id= $id");
                        if(isset($_GET['id']))
                        {  $id=$_GET['id'];
                            $pdoStatement = $this->pdo->query($sql);
                            $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
                            return $result;
                        }
                        // header('location:?page=Ajout');                  
                    }
                    public function table($id){
                        $mysqlClient =new PDO('mysql:host=localhost;dbname=Footlo;charset=utf8', 'soso', 'Pokemon');
$requete =$mysqlClient ->prepare ("SELECT * FROM Kickz");
          $requete->execute();
                    }
                     public function tableau(){
                        while($resulta = $requete->fetch(PDO:: FETCH_ASSOC)){
                           
                     }
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
                     * Get the value of Genre
                     */ 
                    public function getGenre()
                    {
                                        return $this->Genre;
                    }

                    /**
                     * Set the value of Genre
                     *
                     * @return  self
                     */ 
                    public function setGenre($Genre)
                    {
                                        $this->Genre = $Genre;

                                        return $this;
                    }
                    }

                