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

}

