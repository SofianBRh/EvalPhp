<?php

namespace App\Controller;
use App\Model\CrudModel;

use App\Controller\AbstractController;

class CrudController extends AbstractController
{
    public function ccreate()
    {
        $AjoutModel = new CrudModel();
        if(isset($_POST['Name'])){
        $Name = $_POST['Name'];
        $Price =$_POST['Price'];
        $Image =$_FILES['Image'];
        $Quantity = $_POST['Quantity'] ;
        $Description =$_POST['Description'];
        $Genre = $_POST['Genre'];

        $data = [
            "Name" => $Name,
            "Price" => $Price,
            "Image" => $Image,
            "Quantity" => $Quantity,
            "Description" => $Description,
            "Genre" => $Genre,
        ];
   
        $Ajouts = $AjoutModel->ccreate($data);
        $tmpName=$_FILES['Image']['tmp_name'];
        $name=$_FILES['Image']['name'];
        move_uploaded_file($tmpName,'./Image/'.$name) ;
    }else{
        $Ajouts='';
    }
        $products = $AjoutModel->findAll();
        // ma logique métier ici
        // exemple récupérer des données en BDD
        // traiter des formulaire
        // vérifier que l'utilisateur a les droits
        // etc...
        $this->render('Ajout.php', [
            'Ajouts' => $Ajouts,
            'products' => $products
        ]);
    }
    public function delete()
    {
        $id=$_GET['id'];
        $DeleteModel = new CrudModel();

        $Deletes = $DeleteModel->delete($id);
        
        // ma logique métier ici
        // exemple récupérer des données en BDD
        // traiter des formulaire
        // vérifier que l'utilisateur a les droits
        // etc...
        // $this->render('Delete.php', [
        //     'Delete' => $Deletes
        // ]);
        header('Location:?page=Ajout');
    }

    public function img(){
        if(isset($_POST['submit'])){
            $img=$_FILES['Image'];
            move_uploaded_file($_FILES['Image'],'Image'/'$img') ;
        }
    }
  
        public function modif()
        {
            $ModifModel = new CrudModel();
            if(isset($_POST['Name'])){
                $Name = $_POST['Name'];
                $Price =$_POST['Price'];
                $Image =$_FILES['Image'];
                $Quantity = $_POST['Quantity'] ;
                $Description =$_POST['Description'];
                $Genre = $_POST['Genre'];
        
            $data = [
                "Name" => $Name,
                "Price" => $Price,
                "Image" => $Image,
                "Quantity" => $Quantity,
                "Description" => $Description,
                "Genre" => $Genre,
            ];
            $Modifs = $ModifModel->modif($data);
       $Image =$_FILES['Image'];
            $this->render('Modif.php', [
                'Modifs' => $Modifs,
            ]);
        }

    }}
//     public function search( $content  ) {
//         try{
//             $sql = "SELECT
//             `id`
//                                 ,`Name`
//                                 ,`Price`
//                                 ,`Image`
//                                 ,`Quantity`
                               
//                                 ,`Description`
//                                 ,`Genre` 
//             FROM Kickz WHERE `Name` 
//             LIKE :search
           
//             ORDER BY `id` DESC;
//     ";
//     $test = '%'.$content.'%';
//     $hash = '%'.$hashtag.'%';
//     $pdoStatement = $this->pdo->prepare($sql);
//     $pdoStatement->bindParam(":search",$test);
   
//     $pdoStatement->execute();
//     $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
//     return $result;
//         }
//         catch( Exception $error) 
//         {dump($error);}
//         }
//         $this->render('home.php', [
//             'homes' => $homes,
//             'searchs' => $searchs,
//             'searchcontent' => $searchcontent
//         ]);
// }


