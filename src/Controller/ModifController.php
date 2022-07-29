<?php

    namespace App\Controller;
    use App\Model\ModifModel;

    use App\Controller\AbstractController;

    class ModifController extends AbstractController







    {

        
        public function modif()
        {
            $ModifModel = new ModifModel();

            $Modifs = $ModifModel->modif();
            // ma logique métier ici
            // exemple récupérer des données en BDD
            // traiter des formulaire
            // vérifier que l'utilisateur a les droits
            // etc...
            $this->render('Modif.php', [
                'Modifs' => $Modifs,
            ]);
        }

    }
