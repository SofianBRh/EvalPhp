<?php

    namespace App\Controller;
    use App\Model\ModifModel;

    use App\Controller\AbstractController;

    class ModifController extends AbstractController







    {

        
        public function modif()
        {
            $ModifModel = new ModifModel();
            if (isset($_POST['Name'])){
            $Modifs = $ModifModel->modiff();}else{
                $Modifs=NULL;
            }
            $DetailModel = new ModifModel();

            $details = $DetailModel->findById($_GET['id']);
            // ma logique métier ici
            // exemple récupérer des données en BDD
            // traiter des formulaire
            // vérifier que l'utilisateur a les droits
            // etc...
           
            // ma logique métier ici$_POST
            // exemple récupérer des données en BDD
            // traiter des formulaire
            // vérifier que l'utilisateur a les droits
            // etc...
            $this->render('Modif.php', [
                'Modifs' => $Modifs,
                'details' => $details

            ]); 
        }

    }
