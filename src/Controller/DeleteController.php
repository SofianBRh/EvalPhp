<?php

namespace App\Controller;

use App\Model\DeleteModel;
use App\Controller\AbstractController;

class DeleteController extends AbstractController
{



    
    public function delete()
    {
        $DeleteModel = new DeleteModel();

        $Deletes = $DeleteModel->delete();
        
        // ma logique métier ici
        // exemple récupérer des données en BDD
        // traiter des formulaire
        // vérifier que l'utilisateur a les droits
        // etc...
        $this->render('Delete.php', [
            'Delete' => $Deletes
        ]);
    }

}